<?php
class Login extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('login_model');
  }

  function index(){
      $this->load->view('admin/login');
  }

  function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $level = $this->input->post('level');
    
    $where = array(
        'username' => $username,
        'password' => $password,
        'level' => $level
        
    );
    $cek = $this->login_model->cek('admin',$where);
    if($cek->num_rows() > 0){
        $data_session = array(  
          'username' => $username,
            'level' => "$level",
            'status' => 'login'
        );
    $this->session->set_userdata('admin', $cek->row_array());
    redirect(base_url('admin/home'));
    }else{
    $this->session->set_flashdata('sukses', 'Username atau password salah!');
    redirect(base_url("admin/login"));
        }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('admin/login'));
    }
}