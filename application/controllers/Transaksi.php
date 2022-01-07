<?php
class Transaksi extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('transaksi_model');
  }

function pengembalian_proses(){
    $id = $this->uri->segment(4);
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
				$config['source_image'] 	= './assets/upload/pengembalian/'.$upload_data['uploads']['file_name']; 
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
	redirect(base_url('user/pembelian'));
  }

  function pengembalian($id){
    $tbl = 'transaksi';
    $field = '*';
    $key = 'id_transaksi';
    $args = $id;
    $a	= $this->transaksi_model->getData($tbl,$field,$key,$args);

    $v = $this->form_validation;
		$v->set_rules('alasan','file','required');
		
		if($v->run()) {
			if(!empty($_FILES['file']['name'])) 
			$config['upload_path'] 		= './assets/upload/pengembalian/';
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
				$config['source_image'] 	= './assets/upload/pengembalian/'.$upload_data['uploads']['file_name']; 
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
								'id_transaksi' => $i->post('id'),
								'status'		=> 'pengembalian',
								'alasan'		=> $i->post('alasan'),
								'fotop'	=> $upload_data['uploads']['file_name']
				 			 );

				$this->transaksi_model->update($tbl,$key,$args,$data);	
				$this->session->set_flashdata('sukses','Ajuan pengembalian berhasil dikirim!');
				redirect(base_url('user/refund'));
		}}
		// Default page
		$data = array(	
						'isi'		=> 'user/pengembalian',
                        'a' => $a
                    );
		$this->load->view('layout/wrap',$data);
	}

}