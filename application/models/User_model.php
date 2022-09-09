<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function tampil_data()
    {
        return $this->db->get('tb_user')->result_array();
    }


    public function tampil_by_username($username)
    {
        $this->db->where('username', $username);
        return $this->db->get('tb_user')->row_array();
    }

    public function tampil_by_id($id_user)
    {
        $this->db->where('id_user', $id_user);
        return $this->db->get('tb_user')->row_array();
    }

    public function tambah_data($data)
    {
        $this->db->insert('tb_user', $data);
    }

    public function hapus_data($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->delete('tb_user');
    }
}
