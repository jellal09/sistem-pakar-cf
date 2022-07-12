<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_penyakit extends CI_Model
{

  public function get_data($table)
  {
    return $this->db->get($table);
  }

  public function insert_data($data)
  {
    return $this->db->insert('tb_penyakit', $data);
  }

  public function hapus_data($id)
  {
    $this->db->where('kd_penyakit', $id);
    $this->db->delete('tb_penyakit');
  }

  public function detail($id)
  {
    $this->db->select('*');
    $this->db->from('tb_penyakit');
    $this->db->where('kd_penyakit', $id);
    $query = $this->db->get();
    return $query;
  }

  public function M_updateData($data, $id)
  {
    return $this->db->where('kd_penyakit', $id)->update('tb_penyakit', $data);
  }

  public function cekkode()
  {
    $this->db->select('RIGHT(tb_penyakit.kd_penyakit,3) as kd_penyakit', FALSE);
    $this->db->order_by('kd_penyakit', 'DESC');
    $this->db->limit(1);
    $query = $this->db->get('tb_penyakit');
    if ($query->num_rows() <> 0) {
      $data = $query->row();
      $kode = intval($data->kd_penyakit) + 1;
    } else {
      $kode = 1;
    }
    $batas = str_pad($kode, 3, "0", STR_PAD_LEFT);
    $kodetampil = "HP" . $batas;
    return $kodetampil;
  }
}
