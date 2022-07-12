<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_riwayat extends CI_Model
{
  public function tampil()
  {
    $this->db->select('*')->from('tb_hasil');
    $this->db->join('tb_penyakit', 'tb_penyakit.kd_penyakit=tb_hasil.kd_penyakit');
    $this->db->join('tb_pengguna', 'tb_pengguna.kd_pengguna=tb_hasil.kd_pengguna');
    $query = $this->db->get();
    return $query;
  }

  public function tampil_detail($id)
  {
    $this->db->select('*')->from('tb_hasil');
    $this->db->join('tb_pengguna', 'tb_pengguna.kd_pengguna=tb_hasil.kd_Pengguna');
    $this->db->where("kd_hasil", $id);
    $query = $this->db->get();
    return $query;
  }
}
