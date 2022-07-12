<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengetahuan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pengetahuan');
    $this->load->library('form_validation');
    $this->load->helper('url');
    if (!$this->session->userdata('username')) {
      redirect(base_url("user/Auth/login"));
    }
  }

  public function index()
  {
    $data['page_title'] = 'Basis Pengetahuan';
    $data['pengetahuan'] = $this->M_pengetahuan->tampil()->result();
    $this->load->view('backend/v_pengetahuan', $data);
  }

  public function tambahPengetahuan()
  {
    $data['page_title'] = 'Tambah Basis Pengetahuan';
    $data['penyakit'] = $this->M_pengetahuan->penyakit()->result();
    $data['gejala'] = $this->M_pengetahuan->gejala()->result();
    $this->load->view('backend/v_tambahpengetahuan', $data);
  }

  public function tambahPengetahuanAksi()
  {
    $nama_penyakit = $this->input->post('kd_penyakit');
    $nama_gejala = $this->input->post('kd_gejala');
    $mb = $this->input->post('mb');
    $md = $this->input->post('md');
    $cf_pakar = ($mb - $md);

    $data = [
      'kd_penyakit' => $nama_penyakit,
      'kd_gejala' => $nama_gejala,
      'mb' => $mb,
      'md' => $md,
      'cf_pakar' => $cf_pakar,
    ];

    $tambah = $this->M_pengetahuan->tambahPengetahuan($data);
    if ($tambah) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil ditambahkan</div>');
      redirect('admin/Pengetahuan', $data);
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data Gagal Ditambahkan</div>');
      redirect('admin/Pengetahuan', $data);
    }
  }

  public function editPengetahuan($id)
  {
    $data['page_title'] = 'Edit Basis Pengetahuan';
    $data['penyakit'] = $this->M_pengetahuan->penyakit()->result();
    $data['gejala'] = $this->M_pengetahuan->gejala()->result();
    $data['edit'] = $this->M_pengetahuan->tampilEdit($id)->row();
    $this->load->view('backend/v_editpengetahuan', $data);
  }

  public function editPengetahuanAksi($id)
  {
    $this->form_validation->set_rules('mb', 'mb', 'required|trim', ['required' => 'Field Tidak Boleh Kosong']);
    $this->form_validation->set_rules('md', 'md', 'required|trim', ['required' => 'Field Tidak Boleh Kosong']);
    if ($this->form_validation->run() == FALSE) {
      $this->editPengetahuan($id);
    } else {
      $nama_penyakit = $this->input->post('kd_penyakit');
      $nama_gejala = $this->input->post('kd_gejala');
      $mb = $this->input->post('mb');
      $md = $this->input->post('md');
      $cf_pakar = ($mb - $md);

      $data = [
        'kd_penyakit' => $nama_penyakit,
        'kd_gejala' => $nama_gejala,
        'mb' => $mb,
        'md' => $md,
        'cf_pakar' => $cf_pakar,
      ];

      $update = $this->M_pengetahuan->updatePengetahuan($id, $data);
      if ($update) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Gagal Diubah</div>');
      }
      redirect('admin/pengetahuan');
    }
  }

  public function hapusPengetahuan($id)
  {
    $delete = $this->M_pengetahuan->hapusPengetahuan($id);
    if ($delete) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    }
    redirect('admin/pengetahuan');
  }
}
