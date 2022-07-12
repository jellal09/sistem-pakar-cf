<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_dashboard extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }
  public function penyakit()
  {
    $this->db->select('*, COUNT(kd_penyakit) as total');
    $this->db->from('tb_penyakit');
    $this->db->where('kategori="Penyakit"');
    $query = $this->db->get();
    return $query;
  }

  public function hama()
  {
    $this->db->select('*, COUNT(kd_penyakit) as total');
    $this->db->from('tb_penyakit');
    $this->db->where('kategori="Hama"');
    $query = $this->db->get();
    return $query;
  }

  public function gejala()
  {
    $this->db->select('*, COUNT(kd_gejala) as total');
    $this->db->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function pengetahuan()
  {
    $this->db->select('*, COUNT(kd_pengetahuan) as total');
    $this->db->from('tb_pengetahuan');
    $query = $this->db->get();
    return $query;
  }
}
