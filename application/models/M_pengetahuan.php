<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_pengetahuan extends CI_Model
{
  public function tampil()
  {
    $this->db->select('*')->from('tb_pengetahuan');
    $this->db->join('tb_penyakit', 'tb_penyakit.kd_penyakit=tb_pengetahuan.kd_penyakit');
    $this->db->join('tb_gejala', 'tb_gejala.kd_gejala=tb_pengetahuan.kd_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function penyakit()
  {
    $this->db->select('*')->from('tb_penyakit');
    $query = $this->db->get();
    return $query;
  }

  public function gejala()
  {
    $this->db->select('*')->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function tambahPengetahuan($data)
  {
    return $this->db->insert('tb_pengetahuan', $data);
  }

  public function hapusPengetahuan($id)
  {
    return $this->db->where('kd_pengetahuan', $id)->delete('tb_pengetahuan');
  }

  public function tampilEdit($id)
  {
    $this->db->select('*')->from('tb_pengetahuan');
    $this->db->join('tb_penyakit', 'tb_penyakit.kd_penyakit=tb_pengetahuan.kd_penyakit');
    $this->db->join('tb_gejala', 'tb_gejala.kd_gejala=tb_pengetahuan.kd_gejala');
    $this->db->where('tb_pengetahuan.kd_pengetahuan', $id);
    $query = $this->db->get();
    return $query;
  }

  public function updatePengetahuan($id, $data)
  {
    return $this->db->where('kd_pengetahuan', $id)->update('tb_pengetahuan', $data);
  }
}
