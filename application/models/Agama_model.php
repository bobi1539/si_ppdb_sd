<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Agama_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_agama')->result_array();
    }

    public function tampil_by_id($id_agama)
    {
        $this->db->where('id_agama', $id_agama);
        return $this->db->get('tb_agama')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_agama', $data);
    }

    public function hapus_data($id_agama)
    {
        $this->db->where('id_agama', $id_agama);
        $this->db->delete('tb_agama');
    }
}
