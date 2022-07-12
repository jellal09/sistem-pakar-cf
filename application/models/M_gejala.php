<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_gejala extends CI_Model
{
  public function tampil()
  {
    $this->db->select('*')->from('tb_gejala');
    $query = $this->db->get();
    return $query;
  }

  public function hapusGejala($id)
  {
    $this->db->where('kd_gejala', $id)->delete('tb_gejala');
  }

  public function cekkodeGejala()
  {
    $this->db->select('RIGHT(tb_gejala.kd_gejala,3) as kd_gejala', FALSE);
    $this->db->order_by('kd_gejala', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('tb_gejala');
    if ($query->num_rows() <> 0) {
      $data = $query->row();
      $kode = intval($data->kd_gejala) + 1;
    } else {
      $kode = 1;
    }
    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodetampil = "G" . $batas;
    return $kodetampil;
  }

  public function simpanGejala($data)
  {
    return $this->db->insert('tb_gejala', $data);
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from('tb_gejala');
    $this->db->where('kd_gejala', $id);
    $query = $this->db->get();
    return $query;
  }

  public function M_editGejala($data, $id)
  {
    return $this->db->where('kd_gejala', $id)->update('tb_gejala', $data);
  }
}
