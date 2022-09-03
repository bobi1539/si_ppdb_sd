<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{


    public function tampil_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tb_user')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_user', $data);
    }

    public function hapus_data($kode_pegawai)
    {
        $this->db->where('kode_pegawai', $kode_pegawai);
        $this->db->delete('tb_user');
    }
}
