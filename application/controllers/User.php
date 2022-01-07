<?php
class User extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('transaksi_model');
      $this->load->model('register_model');
      $this->load->model('user_model');
  }

  function pembelian(){
    $id = $this->session->userdata('user')['id_user'];
    $transaksi = $this->transaksi_model->pembelian($id);
    $data = array(
      'isi' => 'user/pesanan',
      'beli' => $transaksi
    );
      $this->load->view('layout/wrap', $data);
  }

  function profil(){
    $id = $this->session->userdata('user')['id_user'];
    $user = $this->user_model->profil($id)->row_array();
    $data = array(
      'isi' => 'user/profil',
      'user' => $user
    );
    $this->load->view('layout/wrap', $data);
  }

  function update_profil(){
    $id = $this->session->userdata('user')['id_user'];
    $tbl = 'user';
    $key = 'id_user';
    $args = $id;
    $data = array(
      'nama' => $this->input->post('nama'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email'),
      'telepon' => $this->input->post('telepon'),
      'alamat' => $this->input->post('alamat'),
      'tempat_lahir' => $this->input->post('tempat'),
      'tanggal_lahir' => $this->input->post('tgl'),
    );
    $this->transaksi_model->update($tbl,$key,$args,$data);
    $this->session->set_flashdata('sukses','Berhasil Update Profil');
    redirect(base_url('user/profil'));
  }

  function pesanan(){
    $data = array(
      'isi' => 'user/pesanan'
    );
    $this->load->view('layout/wrap', $data);
  }

  function verif(){
    $id = $this->session->userdata('user')['id_user'];
    $transaksi = $this->transaksi_model->pembelian($id);
    $data = array(
      'isi' => 'user/verif',
      'beli' => $transaksi
    );
      $this->load->view('layout/wrap', $data);
  }

  function selesai(){
    $id = $this->session->userdata('user')['id_user'];
    $transaksi = $this->transaksi_model->pembelian($id);
    $data = array(
      'isi' => 'user/selesai',
      'beli' => $transaksi
    );
      $this->load->view('layout/wrap', $data);
  }

  function refund(){
    $id = $this->session->userdata('user')['id_user'];
    $transaksi = $this->transaksi_model->pembelian($id);
    $data = array(
      'isi' => 'user/refund',
      'beli' => $transaksi
    );
      $this->load->view('layout/wrap', $data);
  }

  function register(){
    $data = array(
      'isi' => 'user/register'
    );
    $this->load->view('layout/wrap', $data);
  }

  function regis(){
    $email = $this->input->post('email');
    $data = array(
      'nama' => $this->input->post('nama'),
      'username' => $this->input->post('username'),
      'password' => $this->input->post('password'),
      'email' => $this->input->post('email'),
      'alamat' => $this->input->post('alamat'),
      'telepon' => $this->input->post('telepon'),
      'tempat_lahir' => $this->input->post('tempat'),
      'tanggal_lahir' => $this->input->post('tanggal'),
      'status' => 'nonaktif'
    );
    $id = $this->register_model->insert($data);

    $encrypted_id = md5($id);

    $this->load->library('email');
        $config = array();
        $config['charset'] = 'utf-8';
        $config['useragent'] = 'Codeigniter';
        $config['protocol']= "smtp";
        $config['mailtype']= "html";
        $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
        $config['smtp_port']= "465";
        $config['smtp_timeout']= "400";
        $config['smtp_user']= "menkusai7@gmail.com"; // isi dengan email kamu
        $config['smtp_pass']= "galau712"; // isi dengan password kamu
        $config['crlf']="\r\n"; 
        $config['newline']="\r\n"; 
        $config['wordwrap'] = TRUE;
        //memanggil library email dan set konfigurasi untuk pengiriman email

        $this->email->initialize($config);
        //konfigurasi pengiriman
        $this->email->from($config['smtp_user']);
        $this->email->to($email);
        $this->email->subject("Verifikasi Akun");
        $this->email->message(
            "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
            site_url("user/verifikasi/$encrypted_id")
          );

        if($this->email->send())
        {
            $this->session->set_flashdata('sukses','Berhasil melakukan registrasi, silahkan cek email kamu');
            redirect(base_url('user/register'));
        }else
        {
          $this->session->set_flashdata('sukses','Berhasil melakukan registrasi, namu gagal mengirim verifikasi email');
          redirect(base_url('user/register'));
        }
    }

    function verifikasi($key){
      $this->register_model->aktivasi($key);
      $this->session->set_flashdata('sukses','selamat akun telah terverifikasi, Silahkan login');
      redirect(base_url('home'));
    }

    function sukses($id){
      $data = array('status' => 'selesai');
    $this->transaksi_model->update('transaksi','id_transaksi',$id,$data);	
    $this->session->set_flashdata('sukses','Transaksi Telah Selesai!');
	redirect(base_url('user/selesai'));
    }
}