<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_penyakit');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    if (!$this->session->userdata('username')) {
      redirect(base_url("user/Auth/login"));
    }
  }

  public function index()
  {
    $data['page_title'] = 'Data Hama dan Penyakit';
    $data['penyakit'] = $this->M_penyakit->get_data('tb_penyakit')->result();
    $this->load->view('backend/v_penyakit', $data);
  }

  public function tambah()
  {
    $data['page_title'] = 'Tambah Data Penyakit';
    $data['cekkode'] = $this->M_penyakit->cekkode();
    $this->load->view('backend/v_tambahpenyakit', $data);
  }

  public function tambah_aksi()
  {
    $cekkode = $this->M_penyakit->cekkode(); //menambahkan kode huruf penyakit
    $nama_penyakit = $this->input->post('nama_penyakit'); //kolom tambah hama dan penyakit
    $detail_penyakit = $this->input->post('detail_penyakit');
    $penanganan_penyakit = $this->input->post('penanganan_penyakit');
    $kategori = $this->input->post('kategori');
    $gambar = $_FILES['gambar']['name']; //upload gambar

    $config['upload_path']        =    './assets/gambar/penyakit'; //penyimpanan ga,bar
    $config['allowed_types']    =    'jpg|jpeg|png'; //format gambar
    $config['max_size']            =    10000; //max. ukuran gambar

    $this->load->library('upload', $config); //memanggil library upload

    if ($gambar) {
      if ($this->upload->do_upload('gambar')) {
        $data = [
          'kd_penyakit' => $cekkode,
          'nama_penyakit' => $nama_penyakit,
          'detail_penyakit' => $detail_penyakit,
          'penanganan_penyakit' => $penanganan_penyakit,
          'kategori' => $kategori,
          'gambar' => preg_replace("/\s+/", "_", $gambar),
        ];

        $insert_data = $this->M_penyakit->insert_data($data); //memasukkan data ke database

        if ($insert_data) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Ditambah</div>'); //menambahkan flashdata berhasil
          redirect('admin/Penyakit', $data);
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data tidak berhasil ditambah</div>'); //menambahkan flashdata gagal
          redirect('admin/Penyakit', $data);
        }
      } else {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Gagal Upload, Gambar tidak sesuai format</div>');
        redirect('admin/Penyakit', $error);
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
      redirect('admin/Penyakit');
    }
  }

  public function editPenyakit($id)
  {
    $data['page_title'] = 'Edit Penyakit';
    $data['edit'] = $this->M_penyakit->detail($id)->row();
    $this->load->view('backend/v_editpenyakit', $data);
  }

  public function editPenyakitAksi($id)
  {
    $nama_penyakit = $this->input->post('nama_penyakit');
    $detail_penyakit = $this->input->post('detail_penyakit');
    $penanganan_penyakit = $this->input->post('penanganan_penyakit');
    $kategori = $this->input->post('kategori');
    $gambar = $_FILES['gambar']['name'];

    $config['upload_path']        =    './assets/gambar/penyakit';
    $config['allowed_types']    =    'jpg|jpeg|png';
    $config['max_size']            =    10000;

    $this->load->library('upload', $config);

    if ($gambar) {
      if ($this->upload->do_upload('gambar')) {
        $data = [
          'nama_penyakit' => $nama_penyakit,
          'detail_penyakit' => $detail_penyakit,
          'penanganan_penyakit' => $penanganan_penyakit,
          'kategori' => $kategori,
          'gambar' => preg_replace("/\s+/", "_", $gambar),
        ];

        $update = $this->M_penyakit->M_updateData($data, $id);

        if ($update) {
          $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
          redirect('admin/Penyakit', $data);
        } else {
          $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data Gagal Diubah</div>');
          redirect('admin/Penyakit', $data);
        }
      } else {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Upload Gagal, Gambar Tidak Sesuai Format</div>');
        redirect('admin/Penyakit', $error);
      }
    } else {
      $data = [
        'nama_penyakit' => $nama_penyakit,
        'detail_penyakit' => $detail_penyakit,
        'penanganan_penyakit' => $penanganan_penyakit,
        'kategori' => $kategori,
      ];

      $update = $this->M_penyakit->M_updateData($data, $id);

      if ($update) {
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Diubah</div>');
        redirect('admin/Penyakit', $data);
      } else {
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">Data Gagal Diubah</div>');
        redirect('admin/Penyakit', $data);
      }
      // $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal Ditambahkan, Harap Mengupload Gambar</div>');
      // redirect('admin/Penyakit');
    }
  }

  public function hapus_data($id)
  {
    $delete = $this->M_penyakit->hapus_data($id);
    if ($delete) {
      $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Data Gagal Dihapus</div>');
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Data Berhasil Dihapus</div>');
    }
    redirect('admin/Penyakit');
  }

  // public function _rules()
  // {
  //   $this->form_validation->set_rules('nama_penyakit', 'Nama Penyakit', 'required', array(
  //     'required' => '%s harus diisi'
  //   ));
  //   $this->form_validation->set_rules('penanganan_penyakit', 'Penanganan Penyakit', 'required', array(
  //     'required' => '%s harus diisi'
  //   ));
  //   $this->form_validation->set_rules('detail_penyakit', 'Detail Penyakit', 'required', array(
  //     'required' => '%s harus diisi'
  //   ));
  // }
}
