<?php
class User extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('user_model');
  }

  function admin(){
      $admin = $this->user_model->admin();
      $data = array(
            'title' => 'Admin',
            'isi' => 'admin/user/admin',
            'admin' => $admin,
            'activeTab' => 'user' 
      );
      $this->load->view('admin/layout/wrap',$data);
  }

  function profil(){
    $id = $this->session->userdata('admin')['id_admin'];
    $tbl = 'admin';
    $field = '*';
    $key = 'id_admin';
    $args = $id;
    $v = $this->form_validation;
    $admin = $this->user_model->getData($tbl,$field,$key,$args);
    $v->set_rules('nama','username','required');
    if($v->run()) {
        $data = array(

            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $this->user_model->update($tbl,$key,$args,$data);
        $this->session->set_flashdata('sukses','Admin barhasil di-update');
				redirect(base_url('admin/user/profil'));
    }
        $data = array(
            'title' => 'Profil',
            'isi' => 'admin/user/profil',
            'admin' => $admin
        );
        $this->load->view('admin/layout/wrap', $data);
  }

  function tambaha(){
    $v = $this->form_validation;
    $v->set_rules('nama','username','required');
    if($v->run()) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => $this->input->post('level'),
        );
        $this->user_model->insert('admin', $data);
        $this->session->set_flashdata('sukses','Admin barhasil ditambah');
				redirect(base_url('admin/user/admin'));
    }
        $data = array(
            'title' => 'Tambah Admin',
            'isi' => 'admin/user/tambaha',
            'activeTab' => 'user'
        );
        $this->load->view('admin/layout/wrap', $data);
  }

  function edita($id){
    $tbl = 'admin';
    $field = '*';
    $key = 'id_admin';
    $args = $id;
    $v = $this->form_validation;
    $admin = $this->user_model->getData($tbl,$field,$key,$args);
    $v->set_rules('nama','username','required');
    if($v->run()) {
        $data = array(

            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        $this->user_model->update($tbl,$key,$args,$data);
        $this->session->set_flashdata('sukses','Admin barhasil di-update');
				redirect(base_url('admin/user/admin'));
    }
        $data = array(
            'title' => 'Tambah Admin',
            'isi' => 'admin/user/edita',
            'activeTab' => 'user',
            'admin' => $admin
        );
        $this->load->view('admin/layout/wrap', $data);
  }

  function deleta(){
      $key = 'id_admin';
      $tbl = 'admin';
    $id = $this->uri->segment(4);
    $this->user_model->delete($id,$key,$tbl);
    redirect('admin/user/admin');
  }

  function user(){
    $user = $this->user_model->user();
    $data = array(
          'title' => 'User',
          'isi' => 'admin/user/user',
          'user' => $user,
          'activeTab' => 'user' 
    );
    $this->load->view('admin/layout/wrap',$data);
  }

  function tambahu(){
    $v = $this->form_validation;
    $v->set_rules('nama','username','required');
    if($v->run()) {
        $data = array(
            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'status' => $this->input->post('status'),
        );
        $this->user_model->insert('user', $data);
        $this->session->set_flashdata('sukses','User barhasil ditambah');
				redirect(base_url('admin/user/user'));
    }
        $data = array(
            'title' => 'Tambah User',
            'isi' => 'admin/user/tambahu',
            'activeTab' => 'user'
        );
        $this->load->view('admin/layout/wrap', $data);
  }

  function editu($id){
    $tbl = 'user';
    $field = '*';
    $key = 'id_user';
    $args = $id;
    $v = $this->form_validation;
    $user = $this->user_model->getData($tbl,$field,$key,$args);
    $v->set_rules('nama','username','required');
    if($v->run()) {
        $data = array(

            'nama' => $this->input->post('nama'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'tempat_lahir' => $this->input->post('tempat'),
            'tanggal_lahir' => $this->input->post('tanggal'),
            'status' => $this->input->post('status'),
        );
        $this->user_model->update($tbl,$key,$args,$data);
        $this->session->set_flashdata('sukses','User barhasil di-update');
				redirect(base_url('admin/user/user'));
    }
        $data = array(
            'title' => 'Edit User',
            'isi' => 'admin/user/editu',
            'activeTab' => 'user',
            'user' => $user
        );
        $this->load->view('admin/layout/wrap', $data);
  }

  function deletu(){
    $key = 'id_user';
    $tbl = 'user';
  $id = $this->uri->segment(4);
  $this->user_model->delete($id,$key,$tbl);
  redirect('admin/user/user');
  }
}