<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_diagnosis');
    $this->load->library('form_validation');
    $this->load->helper('url');
  }

  public function index()
  {
    $data['page_title'] = 'Home';
    $data['data'] = $this->M_diagnosis->get_no_pengguna();
    $this->load->view('frontend/v_biodata', $data);
  }

  public function save_nama()
  {
    $nama['nama_pengguna'] = $this->input->post('nama_pengguna');
    $nama['kd_pengguna'] = $this->input->post('kd_pengguna');

    $this->session->set_userdata('kd_pengguna', $this->input->post('kd_pengguna'));
    $this->session->set_userdata('nama_pengguna', $this->input->post('nama_pengguna'));

    $data = [
      'kd_pengguna' => $this->input->post('kd_pengguna'),
      'nama_pengguna' => $this->input->post('nama_pengguna'),
    ];

    $save_nama = $this->db->insert('tb_pengguna', $data);

    if ($save_nama) {
      redirect('user/Main/diagnosis');
    }
  }

  public function diagnosis()
  {
    $data['page_title'] = 'Home';
    $data['data'] = $this->M_diagnosis->tampil()->result();
    $this->load->view('frontend/v_index', $data);
  }


  public function hasil()
  {

    //kondisi untuk memeriksa apakah session user ada atau tidak
    if (!$this->session->userdata('kd_pengguna')) {
      redirect(base_url("user/Main"));
    }

    //PROSES PENGAMBILAN DATA 
    $counter = count($this->input->post('kondisi[]')); # hitung jumlah berapa gejala yang dipilih (digunakan untuk looping)
    $input_tanggal = date('Y-m-d H:i:s');
    $arbobot = array('0', '1.0', '0.8', '0.6', '0.4', '0.2'); #nilai bobot dari kondisi yang dipilih user

    $arkondisisave = array();

    // Ambil gejala dan kondisi yang dipilih user
    for ($i = 0; $i < $counter; $i++) {
      $kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
      //mengambil nilai kondisi
      if (strlen($_POST['kondisi'][$i]) > 1) { // strlen = untuk menghitung jumlah string atau karakter
        $argejala[] = $kondisi[0]; // array gejala di pilih user
        $arkondisi[] = $kondisi[1]; // array kondisi yang dipilih user
        $arkondisisave += array($kondisi[0] => $kondisi[1]); //array gejala dan kondisi yang dipilih user
      }
    }
    if ($argejala == NULL) {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan pilih gejala terlebih dahulu</div>');
      redirect(base_url("user/Main/diagnosis"));
    }

    //PERHITUNGAN NILAI CF
    $sql_penyakit = $this->db->query("SELECT * FROM tb_penyakit order by kd_penyakit ASC");
    $array_penyakit = array();
    foreach ($sql_penyakit->result_array() as $key) {
      $cftotal_temp = 0;
      $cf = 0;

      $cflama = 0;

      $query_gejala = $this->db->select('*')->where('kd_penyakit', $key['kd_penyakit'])->get('tb_pengetahuan');

      foreach ($query_gejala->result_array() as $key => $value) { // foreach = perulangan data yang sudah ada pada tabel database

        for ($i = 0; $i < $counter; $i++) { //for = perulangan data yang belum ada pada tabel seperti hasil perkalian,dsb.
          $array_kondisi = explode("_", $_POST['kondisi'][$i]); //untuk memecah string setiap tanda petik
          $gejala = $array_kondisi[0]; // isinya kode gejala
          if ($value['kd_gejala'] == $gejala) {
            $cf = $value['cf_pakar'] * $arbobot[$array_kondisi[1]]; //perhitungan cf pakar * cf user

            // Rumus Cf Combine
            if (($cf >= 0) && ($cf * $cflama >= 0)) {
              $cflama = $cflama + ($cf * (1 - $cflama));
            }
          }
        }
      }
      if ($cflama > 0) {
        # hasil dari semua perhitungan cf dalam bentuk array
        $array_penyakit += array($value['kd_penyakit'] => number_format($cflama, 4));
      }
    }

    arsort($array_penyakit); # urutkan hasil perhitungan per penyakit dari nilai yang tertinggi sampai terendah
    $input_gejala = serialize($argejala); # ubah array menjadi varchar agar bisa disimpan di database
    $input_penyakit = serialize($array_penyakit); # ubah array menjadi varchar agar bisa disimpan di database
    $input_kondisi = serialize($arkondisisave); # ubah array menjadi varchar agar bisa disimpan di database


    $np1 = 0;
    foreach ($array_penyakit as $key1 => $value1) {
      $np1++;
      $penyakit_1[$np1] = $key1;
      $nilai[$np1] = $value1;
    }

    //INSERT DATA HASIL PERHITUNGAN KE DATABASE

    $data_hasil = [
      'tanggal' => $input_tanggal,
      'kd_pengguna' => $this->session->userdata('kd_pengguna'),
      'penyakit' => $input_penyakit,
      //'kode_hp' => $input_penyakit,
      'kd_gejala' => $input_kondisi,
      'kd_penyakit' => $penyakit_1[1],
      'cf_hasil' => $nilai[1],
    ];
    $this->db->insert('tb_hasil', $data_hasil);

    //PARSING DATA KE HALAMAN VIEW

    $data['hasil'] = round($nilai[1], 3); //membatasi jumlah digit dibelakang koma
    $data['persentasi'] = round($nilai[1] * 100);
    $data['penyakit'] = $array_penyakit;
    $data['penyakit_lain'] = $array_penyakit;

    $data['kondisi'] = $arkondisi;
    $data['penyakit_terpilih'] = $penyakit_1[1];
    $data['gejala'] = $argejala;
    $data['page_title'] = 'Hasil Diagnosis';

    $this->load->view('frontend/v_hasil', $data);

    $this->session->unset_userdata('kd_pengguna'); // Menghapus Session kode pengguna
    $this->session->unset_userdata('nama_pengguna'); // Menghapus Session nama pengguna
  }

  public function tes()
  {
    $data['page_title'] = 'Hasil Diagnosis';
    $this->load->view('frontend/v_hasil', $data);
  }
}
