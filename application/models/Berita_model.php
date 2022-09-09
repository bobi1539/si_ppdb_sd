<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Berita_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_berita')->result_array();
    }

    public function tampil_by_id($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        return $this->db->get('tb_berita')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_berita', $data);
    }

    public function hapus_data($id_berita)
    {
        $this->db->where('id_berita', $id_berita);
        $this->db->delete('tb_berita');
    }
}
