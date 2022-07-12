<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  public function login()
  {
    $this->form_validation->set_rules('username', 'username', 'trim|required'); //memberikan validasi pada kolom username
    $this->form_validation->set_rules('password', 'password', 'trim|required'); //memberikan validasi pada kolom username
    if ($this->form_validation->run() == FALSE) { //if untuk menjalankan validasi
      $data['page_title'] = 'Login';
      $this->load->view('frontend/v_login', $data);
    } else {
      $this->_login();
    }
  }

  public function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $admin = $this->db->get_where('tb_admin', ['username' => $username])->row_array();

    if ($admin) {
      if (($password) == $admin['password']) {
        $data = [
          'kd_admin' => $admin['kd_admin'],
          'username' => $admin['username']
        ];
        $this->session->set_userdata($data);
        redirect('admin/Dashboard');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password salah</div>');
        redirect('user/Auth/login');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Username tidak terdaftar</div>');
      redirect('user/Auth/login');
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Berhasil Log out</div>');
    redirect('user/Auth/login', 'refresh');
  }
}
