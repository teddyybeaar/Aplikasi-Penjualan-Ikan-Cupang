<?php
class Login extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('login_model');
  }

  function index(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    
    $where = array(
        'username' => $username,
        'password' => $password,
        
    );
    $cek = $this->login_model->cek('user',$where);
    if($cek->num_rows() > 0){
        $data_session = array(  
          'username' => $username,
            'level' => "$level",
            'status' => 'login'
        );
    $this->session->set_userdata('user', $cek->row_array());
    redirect(base_url('home'));
    }else{
    $this->session->set_flashdata('sukses', 'Username atau password salah!');
    redirect(base_url('home'));
        }
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url('home'));
}
}