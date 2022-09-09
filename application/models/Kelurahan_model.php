<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kelurahan_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kelurahan')->result_array();
    }

    public function tampil_by_id($id_kelurahan)
    {
        $this->db->where('id_kelurahan', $id_kelurahan);
        return $this->db->get('tb_kelurahan')->row_array();
    }

    public function tampil_by_id_kecamatan($id_kecamatan)
    {
        $this->db->where('id_kecamatan', $id_kecamatan);
        return $this->db->get('tb_kelurahan')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_kelurahan', $data);
    }

    public function hapus_data($id_kelurahan)
    {
        $this->db->where('id_kelurahan', $id_kelurahan);
        $this->db->delete('tb_kelurahan');
    }
}
