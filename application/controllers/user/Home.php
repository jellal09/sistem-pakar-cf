<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
  public function index()
  {
    $data['page_title'] = 'Home';
    $this->load->view('frontend/v_home', $data);
  }
}
