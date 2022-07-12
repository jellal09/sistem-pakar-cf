<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_informasi extends CI_Model
{
  public function tampil()
  {
    $this->db->select('*')->from('tb_penyakit');
    $query = $this->db->get();
    return $query;
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $this->db->where('kd_penyakit', $id);
    $query = $this->db->get();
    return $query;
  }
}
