<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_diagnosis extends CI_Model
{
    public function tampil()
    {
        $this->db->select('*')->from('tb_gejala');
        $query = $this->db->get();
        return $query;
    }

    function get_no_pengguna()
    {
        $q = $this->db->query("SELECT MAX(RIGHT(kd_pengguna,4)) AS kd_max FROM tb_pengguna");
        $kd = "";
        if ($q->num_rows() > 0) {
            foreach ($q->result() as $k) {
                $tmp = ((int) $k->kd_max) + 1;
                $kd = sprintf("%04s", $tmp);
            }
        } else {
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return "USR" . $kd;
    }
}
