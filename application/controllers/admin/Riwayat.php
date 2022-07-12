<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_riwayat');
    $this->load->library('form_validation');
    $this->load->helper('url');
    if (!$this->session->userdata('username')) {
      redirect(base_url("user/Auth/login"));
    }
  }

  public function index()
  {
    $data['page_title'] = 'Riwayat';
    $data['data'] = $this->M_riwayat->tampil()->result();
    $this->load->view('backend/v_riwayat', $data);
  }

  public function detail($id)
  {
    $data['page_title'] = 'Detail Riwayat';
    $data['detail'] = $this->M_riwayat->tampil_detail($id)->result();
    $this->load->view('backend/v_detailriwayat', $data);
  }
}
