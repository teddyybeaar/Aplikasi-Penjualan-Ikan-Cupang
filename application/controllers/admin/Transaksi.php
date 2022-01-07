<?php
class Transaksi extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('transaksi_model');
      $this->load->model('produk_model');
      $this->load->model('user_model');
  }

  function list(){
    $transaksi = $this->transaksi_model->verifikasi();
    $data = array(
      'title' => 'Verifikasi Pesanan',
      'isi' => 'admin/transaksi/list',
      'verifikasi' => $transaksi,
      'activeTab' => 'transaksi'
  );
      $this->load->view('admin/layout/wrap', $data);
  }

  function verifikasi($id){
    $resi = $this->input->post('resi');
    $data = array(
      'status' => 'dikirim',
      'resi' => $resi
  );
    $this->transaksi_model->update('transaksi','id_transaksi',$id,$data);	
    $this->session->set_flashdata('sukses','Pesanan Dikirim');
	redirect(base_url('admin/transaksi/list'));
  }

  function diterima($id){
    $a = $this->session->userdata('user')['username'];
    $data = array('status' => 'diterima');
    $this->transaksi_model->update('transaksi','id_transaksi',$id,$data);	
    $this->session->set_flashdata('sukses','Pesanan Telah Diterima Oleh $a!');
	redirect(base_url('user/pembelian'));
  }

  function selesai($id){
    $data = array('status' => 'selesai');
    $this->transaksi_model->update('transaksi','id_transaksi',$id,$data);	
    $this->session->set_flashdata('sukses','Transaksi Telah Selesai!');
	redirect(base_url('admin/transaksi/list'));
  }

  function pengembalian_proses($id){
    $data = array('status' => 'pengembalian');
    $this->transaksi_model->update('transaksi','id_transaksi',$id,$data);

    $config['upload_path'] 		= './assets/upload/pengembalian/';
			$config['allowed_types'] 	= 'gif|jpg|png|pdf|jpeg';
			$config['max_size']			= '1000'; // KB			
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('file')) {
				
		$data = array(	'title'			=> 'Tambah Produkk',
						'error'			=> $this->upload->display_errors(),
						'isi'			=> 'user/pengembalian',
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
				
				$data_trans = array(
          'alasan' => $this->input->post('alasan'),
								'bukti'	=> $upload_data['uploads']['file_name']
				 			 );
							  $id_order = $this->produk_model->tambah_order($data_trans);
		}	
    $this->session->set_flashdata('sukses','Transaksi Telah Selesai!');
	redirect(base_url('admin/transaksi'));
  }

  function pengembalian(){
    $transaksi = $this->transaksi_model->verifikasi();
    $data = array(
      'title' => 'Ajuan Pengembalian',
      'isi' => 'admin/transaksi/pengembalian',
      'verifikasi' => $transaksi,
      'activeTab' => 'transaksi'
  );
      $this->load->view('admin/layout/wrap', $data);
  }

  function sukses(){
    $transaksi = $this->transaksi_model->verifikasi();
    $data = array(
      'title' => 'Pesanan Selesai',
      'isi' => 'admin/transaksi/selesai',
      'verifikasi' => $transaksi,
      'activeTab' => 'transaksi'
  );
      $this->load->view('admin/layout/wrapp', $data);
  }

  public function cetak(){
		$transaksi = $this->transaksi_model->verifikasi();
    $total = $this->user_model->total()->row_array();
		$data = array(	'title'		=> 'TRANSAKSI',
						'transaksi'	=> $transaksi,
            'total' => $total,
					);
		$this->load->view('admin/transaksi/print',$data);
	}
}