<?php
class Shop extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('produk_model');
  }

  function index(){
    $data = array(
      'isi' => 'kontak/list'
    );
      $this->load->view('layout/wrap', $data);
  }

  public function cart()
	{
		
		$data = array(	'isi'		=> 'shop/cart'
					);
		$this->load->view('layout/wrap',$data);
	}

    function beli()
	{
		$produk = $this->produk_model->getData('produk','*','id_produk',$this->input->post('id'));
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
	
		redirect('shop/cart');
	}

	public function check_ou()
	{
		$id = $this->cart->contents();
		$user = $this->produk_model->getData('user','*','id_user',$this->session->userdata('user')['id_user']);
		$data = array(	'title'		=> 'Checkout',
						'user' 		=> $user,
						'id' 		=> $id,
						'isi'		=> 'shop/checkout'
					);
		$this->load->view('layout/wrap',$data);
	}

	public function check_out()
	{
		$id = $this->input->post('cart');
		$user = $this->produk_model->getData('user','*','id_user',$this->session->userdata('user')['id_user']);
		$data = array(	'title'		=> 'Checkout',
						'user' 		=> $user,
						'id' 		=> $id,
						'isi'		=> 'shop/checkout'
					);
		$this->load->view('layout/wrap',$data);
	}

	public function proses_orde()
	{
		$get_no_pem = $this->produk_model->get_no_pem();
		$grand_total = 0;
		if ($cart = $this->cart->contents()){
			foreach ($cart as $item){
				$grand_total = $grand_total + $item['subtotal'];
			}
		$data_trans = array(	'id_user' 		=> $this->session->userdata('user')['id_user'],
								'tanggal_pesan' => date('Y-m-d'),
								'id_transaksi' => $this->input->post('id_transaksi'),
								'status' 		=> 'verifikasi',
								'subtotal' 		=> $grand_total
								);
		$id_order = $this->produk_model->tambah_order($data_trans);
	
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
						$amount = $item['price'] * $item['qty'];
						$data_detail = array('id_transaksi' => $this->input->post('id_transaksi'),
											 'id_produk' 	=> $item['id'],
											 'qty' 		 	=> $item['qty'],
											 'harga' 	 	=> $item['price'],			
											 'total' 	 	=> $amount);			
						$proses = $this->produk_model->tambah_detail_order($data_detail);
						$produk = $this->produk_model->getData('produk','*','id_produk',$item['id']);
						$data = array('stok' => $produk['stok'] - $item['qty']);
						$this->produk_model->update('produk','id_produk',$item['id'],$data);
					}
			}
			$this->cart->destroy();
			$data = array(	'title' 	 => 'Pembelian Sukses',
							'isi'   	 => 'shop/sukses',
							'get_no_pem' => $get_no_pem
						);
			$this->load->view('layout/wrap',$data);
		}
	}

	function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('shop/cart');
	}

	function ubah_cart()
	{
		$cart_info = $_POST['cart'];
		foreach( $cart_info as $id => $cart)
		{
			$produk = $this->produk_model->getData('produk','*','id_produk',$cart['id']);
			if($cart['qty'] > $produk['stok']){
				$this->session->set_flashdata('sukses','Stok '.$cart['id'].' hanya tersedia '.$produk['stok']);
			}else{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$gambar = $cart['gambar'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			$data = array(	'rowid'    => $rowid,
							'price'  => $price,
							'gambar' => $gambar,
							'amount' => $amount,
							'qty' 	 => $qty);
			if($produk['stok'] <= 0){
				$this->session->set_flashdata('sukses','Stok tidak mencukupi. sisa stok: '.$produk['stok']);
			}else{
				
				$this->cart->update($data);
			}
		}}
		redirect('shop/cart');
	}

	function proses_order(){
		$get_no_pem = $this->produk_model->get_no_pem();
		$grand_total = 0;
		if ($cart = $this->cart->contents()){
			foreach ($cart as $item){
				$grand_total = $grand_total + $item['subtotal'];
			}
			$config['upload_path'] 		= './assets/upload/bukti/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|jpeg';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file')) {
				
		$data = array(	'title'			=> 'Tambah Produkk',
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'shop/checkout',
                        'activeTab'     => 'produk'
                    );
		$this->load->view('admin/layout/wrap',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/bukti/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 150; // Pixel
				$config['height'] 			= 150; // Pixel
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

				$i = $this->input;
				//$tgl= date('Y-m-d H:i:s');
				
				$data_trans = array('id_user' 		=> $this->session->userdata('user')['id_user'],
				'tanggal_pesan' => date('Y-m-d'),
				'id_transaksi' => $this->input->post('id_transaksi'),
				'status' 		=> 'verifikasi',
				'subtotal' 		=> $grand_total,
				'id_produk' 	=> $i->post('id'),
								'bukti'	=> $upload_data['uploads']['file_name']
				 			 );
							  $id_order = $this->produk_model->tambah_order($data_trans);
		}
		
	
		if ($cart = $this->cart->contents())
			{
				foreach ($cart as $item)
					{
						$amount = $item['price'] * $item['qty'];
						$data_detail = array('id_transaksi' => $this->input->post('id_transaksi'),
											 'id_produk' 	=> $item['id'],
											 'qty' 		 	=> $item['qty'],
											 'harga' 	 	=> $item['price'],			
											 'total' 	 	=> $amount);			
						$proses = $this->produk_model->tambah_detail_order($data_detail);
						$produk = $this->produk_model->getData('produk','*','id_produk',$item['id']);
						$data = array('stok' => $produk['stok'] - $item['qty']);
						$this->produk_model->update('produk','id_produk',$item['id'],$data);
					}
			}
			$this->cart->destroy();
			$data = array(	'title' 	 => 'Pembelian Sukses',
							'isi'   	 => 'shop/sukses',
							'get_no_pem' => $get_no_pem
						);
			$this->load->view('layout/wrap',$data);
		}
	}

	function wishlist()
	{
		$produk = $this->produk_model->getData('produk','*','id_produk',$this->input->post('id'));
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'gambar' => $this->input->post('gambar'),
							 'qty' =>$this->input->post('qty')
							);
		$this->cart->insert($data_produk);
	}
}