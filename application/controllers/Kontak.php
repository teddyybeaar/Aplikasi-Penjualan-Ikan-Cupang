<?php
class Kontak extends CI_Controller
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

  function input(){
    $i = $this->input;
    $data = array(	
      'nama'	=> $i->post('name'),
      'email'		=> $i->post('email'),
      'pesan'		=> $i->post('pesan'),
      'created' => date('Y-m-d H:i:s')
      );

$this->produk_model->insert('kontak',$data);	
$this->session->set_flashdata('sukses','Pesan Terkirim!');
redirect(base_url('kontak'));
  }
}