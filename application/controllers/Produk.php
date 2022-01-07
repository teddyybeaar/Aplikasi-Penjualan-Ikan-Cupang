<?php
class Produk extends CI_Controller
{
  function __construct()
  {
      parent::__construct();
      $this->load->model('produk_model');
  }

  function index(){
    $produk = $this->produk_model->produk();
    $data = array(
      'isi' => 'produk/list',
      'produk' => $produk
    );
      $this->load->view('layout/wrap', $data);
  }

  function detail($id){
    $produk = $this->produk_model->getData('produk','*','id_produk',$id);
    $review = $this->produk_model->review($id);
    $rating = $this->produk_model->rating($id)->row_array();
	$data = array(	'produk'	=> $produk,
					'isi'		=> 'produk/detail',
          'review' => $review,
          'rating' => $rating
					);
	$this->load->view('layout/wrap',$data);
  }

  function review($id){
    $i = $this->input;
    $data = array(
      'rating' => $i->post('rating'),
      'review' => $i->post('review'),
      'id_user' => $this->session->userdata('user')['id_user'],
      'id_produk' => $id,
      'tanggal' => date('Y-m-d')
    );
    $this->produk_model->insert('review', $data);
    redirect(base_url('produk/detail/'.$id));
  }
}