<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pekerjaan_model extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('tb_pekerjaan')->result_array();
	}

	public function tampil_by_id($id_pekerjaan)
	{
		$this->db->where('id_pekerjaan', $id_pekerjaan);
		return $this->db->get('tb_pekerjaan')->row_array();
	}

	public function tambah_data($data)
	{
		$this->db->insert('tb_pekerjaan', $data);
	}

	public function hapus_data($id_pekerjaan)
	{
		$this->db->where('id_pekerjaan', $id_pekerjaan);
		$this->db->delete('tb_pekerjaan');
	}
}
