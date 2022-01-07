<?php
class Kontak extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('user_model');
  }

  function index(){
      $kontak = $this->user_model->kontak();
      $data = array(
            'title' => 'Manajemen Pesan',
            'isi' => 'admin/kontak/list',
            'kontak' => $kontak,
            'activeTab' => 'kontak' 
      );
      $this->load->view('admin/layout/wrap',$data);
  }
}