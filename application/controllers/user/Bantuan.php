<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bantuan extends CI_Controller
{
  public function index()
  {
    $data['page_title'] = 'Bantuan';
    $this->load->view('frontend/v_bantuan', $data);
  }
}
