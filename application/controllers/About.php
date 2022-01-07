<?php
class About extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      
  }

  function index(){
    $data = array(
      'isi' => 'about/list'
    );
      $this->load->view('layout/wrap', $data);
  }
}