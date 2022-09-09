<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Provinsi_model extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('tb_provinsi')->result_array();
	}

	public function tampil_by_id($id_provinsi)
	{
		$this->db->where('id_provinsi', $id_provinsi);
		return $this->db->get('tb_provinsi')->row_array();
	}

	public function tambah_data($data)
	{
		$this->db->insert('tb_provinsi', $data);
	}

	public function hapus_data($id_provinsi)
	{
		$this->db->where('id_provinsi', $id_provinsi);
		$this->db->delete('tb_provinsi');
	}
}
