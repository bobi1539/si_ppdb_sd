<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan_model extends CI_Model
{
	public function tampil_data()
	{
		return $this->db->get('tb_kecamatan')->result_array();
	}

	public function tampil_by_id($id_kecamatan)
	{
		$this->db->where('id_kecamatan', $id_kecamatan);
		return $this->db->get('tb_kecamatan')->row_array();
	}

	public function tampil_by_id_kabupaten($id_kabupaten)
	{
		$this->db->where('id_kabupaten', $id_kabupaten);
		return $this->db->get('tb_kecamatan')->row_array();
	}

	public function tambah_data($data)
	{
		$this->db->insert('tb_kecamatan', $data);
	}

	public function hapus_data($id_kecamatan)
	{
		$this->db->where('id_kecamatan', $id_kecamatan);
		$this->db->delete('tb_kecamatan');
	}
}
