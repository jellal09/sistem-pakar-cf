<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_informasi');
  }

  public function index()
  {
    $data['page_title'] = 'Informasi';
    $data['data'] = $this->M_informasi->tampil()->result();
    $this->load->view('frontend/v_informasi', $data);
  }

  public function detail($id)
  {
    $data['page_title'] = 'Detail Hama & Penyakit';
    $data['detail'] = $this->M_informasi->detail($id)->row();
    $this->load->view('frontend/v_detail', $data);
  }
}
