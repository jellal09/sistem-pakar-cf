<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_dashboard');
    $this->load->helper('url');
    if (!$this->session->userdata('username')) {
      redirect(base_url("user/Auth/login"));
    }
  }

  public function index()
  {

    $data['page_title'] = 'Dashboard';
    $data['hama'] = $this->M_dashboard->hama()->row();
    $data['penyakit'] = $this->M_dashboard->penyakit()->row();
    $data['gejala'] = $this->M_dashboard->gejala()->row();
    $data['pengetahuan'] = $this->M_dashboard->pengetahuan()->row();
    $this->load->view('backend/v_dashboard', $data);
  }
}
