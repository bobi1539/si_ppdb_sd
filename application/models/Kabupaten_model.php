<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kabupaten_model extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_kabupaten')->result_array();
    }

    public function tampil_by_id($id_kabupaten)
    {
        $this->db->where('id_kabupaten', $id_kabupaten);
        return $this->db->get('tb_kabupaten')->row_array();
    }

    public function tampil_by_id_provinsi($id_provinsi)
    {
        $this->db->where('id_provinsi', $id_provinsi);
        return $this->db->get('tb_kabupaten')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_kabupaten', $data);
    }

    public function hapus_data($id_kabupaten)
    {
        $this->db->where('id_kabupaten', $id_kabupaten);
        $this->db->delete('tb_kabupaten');
    }
}
