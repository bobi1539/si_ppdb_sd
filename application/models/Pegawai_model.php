<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pegawai_model extends CI_Model
{


	public function tambah_data($data)
	{
		$this->db->insert('tabel_pegawai', $data);
		return $this->db->insert_id();
	}
	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('tabel_pegawai');
		$this->db->join('tabel_login', 'tabel_login.kode_pegawai = tabel_pegawai.kode_pegawai');
		return $this->db->get()->result_array();
	}

	public function tampil_by_kode($kode_pegawai)
	{
		$this->db->where('kode_pegawai', $kode_pegawai);
		return $this->db->get('tabel_pegawai')->row_array();
	}

	public function hapus_data($kode_pegawai)
	{
		$this->db->where('kode_pegawai', $kode_pegawai);
		$this->db->delete('tabel_pegawai');
	}

	public function update_data($kode_pegawai, $data)
	{
		$this->db->where('kode_pegawai', $kode_pegawai);
		$this->db->update('tabel_pegawai', $data);
	}
}
