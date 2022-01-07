<?php
class Produk extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('produk_model');
  }

  function index(){
    $produk = $this->produk_model->produk();
    $data = array(
      'title' => 'Produk',
      'isi' => 'admin/produk/list',
      'produk' => $produk,
      'activeTab' => 'produk'
  );
      $this->load->view('admin/layout/wrap', $data);
  }

  function tambah(){
    $v = $this->form_validation;
		$v->set_rules('nama','deskripsi','required');
		
		if($v->run()) {
			if(!empty($_FILES['file']['name'])) 
			$config['upload_path'] 		= './assets/upload/produk/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|jpeg';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file')) {
				
		$data = array(	'title'			=> 'Tambah Produkk',
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'admin/produk/tambah',
                        'activeTab'     => 'produk'
                    );
		$this->load->view('admin/layout/wrap',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/produk/'.$upload_data['uploads']['file_name']; 
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
				
				$data = array(	
								'id_produk'	=> $i->post('id_produk'),
								'nama'	=> $i->post('nama'),
								'deskripsi'		=> $i->post('desk'),
								'harga'		=> $i->post('harga'),
								'stok'		=> $i->post('stok'),
								'vid'		=> $i->post('vid'),
								'foto'	=> $upload_data['uploads']['file_name']
				 			 );

				$this->produk_model->insert('produk',$data);	
				$this->session->set_flashdata('sukses','surat keluar barhasil ditambah');
				redirect(base_url('admin/produk'));
		}}
		// Default page
		$data = array(	'title'		=> 'Tambah Produk',
						'isi'		=> 'admin/produk/tambah',
                        'activeTab' => 'produk',
                    );
		$this->load->view('admin/layout/wrap',$data);
	}

    function edit($id_produk){
        $tbl = 'produk';
        $field = '*';
        $key = 'id_produk';
        $args = $id_produk;
        $produk	= $this->produk_model->getData($tbl,$field,$key,$args);

        $v = $this->form_validation;
		$v->set_rules('nama','deskripsi','required');
		
		if($v->run()) {
			if(!empty($_FILES['file']['name'])) {
			$config['upload_path'] 		= './assets/upload/produk/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|jpeg';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file')) {
				
		$data = array(	'title'			=> 'Tambah Produkk',
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'admin/produk/tambah',
                        'activeTab'     => 'produk'
                    );
		$this->load->view('admin/layout/wrap',$data);
		}else{
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/produk/'.$upload_data['uploads']['file_name']; 
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
				
				$data = array(	
								'id_produk'	=> $i->post('id_produk'),
								'nama'	=> $i->post('nama'),
								'deskripsi'		=> $i->post('desk'),
								'harga'		=> $i->post('harga'),
								'stok'		=> $i->post('stok'),
								'vid'		=> $i->post('vid'),
								'foto'	=> $upload_data['uploads']['file_name']
				 			 );

				$this->produk_model->update($tbl,$key,$args,$data);	
				$this->session->set_flashdata('sukses','Produk Berhasil Diedit');
				redirect(base_url('admin/produk'));
		}}else{
            $i = $this->input;
            $data = array(	
                'id_produk'	=> $i->post('id_produk'),
                'nama'	=> $i->post('nama'),
                'deskripsi'		=> $i->post('desk'),
                'harga'		=> $i->post('harga'),
                'stok'		=> $i->post('stok'),
				'vid'		=> $i->post('vid'),
              );

$this->produk_model->update($tbl,$key,$args,$data);	
$this->session->set_flashdata('sukses','surat keluar barhasil ditambah');
redirect(base_url('admin/produk'));
        }}
		// Default page
		$data = array(	'title'		=> 'Edit Produk',
						'isi'		=> 'admin/produk/edit',
                        'produk'         => $produk,
                        'activeTab' => 'produk',
                    );
		$this->load->view('admin/layout/wrap',$data, $produk);
    }

    function delete(){
        $id = $this->uri->segment(4);
        $this->produk_model->delete($id);
        redirect('admin/produk');
    }
        
}