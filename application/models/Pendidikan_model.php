<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pendidikan_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_pendidikan')->result_array();
    }

    public function tampil_by_id($id_pendidikan)
    {
        $this->db->where('id_pendidikan', $id_pendidikan);
        return $this->db->get('tb_pendidikan')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_pendidikan', $data);
    }

    public function hapus_data($id_pendidikan)
    {
        $this->db->where('id_pendidikan', $id_pendidikan);
        $this->db->delete('tb_pendidikan');
    }
}
