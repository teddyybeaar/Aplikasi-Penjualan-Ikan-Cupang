<?php
class Home extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('user_model');
  }

  function index(){
    $chart = $this->user_model->chart()->result();
    $chart2 = $this->user_model->chart2()->result();
    $chart3 = $this->user_model->chart3()->result();
    $a = $this->user_model->total()->row_array();
    $b = $this->user_model->trans()->row_array();
    $c = $this->user_model->users()->row_array();
    $d = $this->user_model->jual()->row_array();
    $data = array(
      'title' => 'Home',
      'isi' => 'admin/home/list',
      'activeTab' => 'home',
      'chart' => json_encode($chart),
      'chart2' => json_encode($chart2),
      'chart3' => json_encode($chart3),
      'a' => $a,
      'b' => $b,
      'c' => $c,
      'd' => $d
  );
      $this->load->view('admin/layout/wrap', $data);
  }
}