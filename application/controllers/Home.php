<?php
class Home extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('produk_model');
  }

  function index(){
    $produk = $this->produk_model->produk();
    $data = array(
      'isi' => 'home/list',
      'produk' => $produk
    );
      $this->load->view('layout/wrap', $data);
  }

  function search(){
    $a = $this->input->get('cari');
    $cari = $this->produk_model->get($a);
    $data = array(
      
      'isi' => 'home/search',
      'a' => $cari
  );
      $this->load->view('layout/wrap',$data);
  }
}