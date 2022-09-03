<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{


    public function tampil_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tabel_login')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tabel_login', $data);
    }

    public function hapus_data($kode_pegawai)
    {
        $this->db->where('kode_pegawai', $kode_pegawai);
        $this->db->delete('tabel_login');
    }
}
