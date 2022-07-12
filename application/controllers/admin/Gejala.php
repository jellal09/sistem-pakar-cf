<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gejala extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_gejala');
    $this->load->library('form_validation');
    $this->load->helper('url');
    if (!$this->session->userdata('username')) {
      redirect(base_url("user/Auth/login"));
    }
  }

  public function index()
  {
    $data['page_title'] = 'Gejala';
    $data['gejala'] = $this->M_gejala->tampil()->result();
    $this->load->view('backend/v_gejala', $data);
  }

  public function tambahGejala()
  {
    $data['page_title'] = 'Tambah Gejala';
    $data['cekkodeGejala'] = $this->M_gejala->cekkodeGejala();
    $this->load->view('backend/v_tambahgejala', $data);
  }

  public function tambahGejalaAksi()
  {
    $kd_gejala = $this->M_gejala->cekkodeGejala();
    $nama_gejala = $this->input->post('nama_gejala');
    $data = [
      'kd_gejala' => $kd_gejala,
      'nama_gejala' => $nama_gejala,
    ];

    $simpanGejala = $this->M_gejala->simpanGejala($data);
    if ($simpanGejala) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal ditambahkan</div>');
    }
    redirect('admin/Gejala');
  }

  public function hapusGejala($id)
  {
    $delete = $this->M_gejala->hapusGejala($id);
    if ($delete) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data gagal  Dihapus</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/Gejala');
  }

  public function editGejala($id)
  {
    $data['page_title'] = 'Edit Gejala';
    $data['edit'] = $this->M_gejala->detail($id)->row();
    $this->load->view('backend/v_editgejala', $data);
  }

  public function editGejalaAksi($id)
  {
    $this->form_validation->set_rules('nama_gejala', 'nama_gejala', 'required|trim', ['required' => 'Field Tidak Boleh Kosong']);
    if ($this->form_validation->run() == FALSE) {
      $this->editGejala($id);
    } else {
      $nama_gejala = $this->input->post('nama_gejala');

      $data = [
        'nama_gejala' => $nama_gejala,
      ];

      $update = $this->M_gejala->M_editGejala($data, $id);

      if ($update) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data berhasil diupdate</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data tidak berhasil diupdate</div>');
      }

      redirect('admin/Gejala/', $data);
    }
  }
}
