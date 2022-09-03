<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Guru_model extends CI_Model
{


	public function tambah_data($data)
	{
		$this->db->insert('tabel_guru', $data);
		return $this->db->insert_id();
	}
	public function tambah($data)
	{
		$this->db->insert('tabel_guru', $data);
	}
	public function tampil_data()
	{
		$this->db->select('*');
		$this->db->from('tabel_guru');
		$this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');
		return $this->db->get()->result_array();
	}

	public function hapus_data($kode_guru)
	{
		$this->db->where('kode_guru', $kode_guru);
		$this->db->delete('tabel_guru');
	}

	public function update_data($kode_guru, $data)
	{
		$this->db->where('kode_guru', $kode_guru);
		$this->db->update('tabel_guru', $data);
	}

	public function tampil_by_kode($kode_guru)
	{
		$this->db->select('*');
		$this->db->from('tabel_guru');
		$this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');
		$this->db->where('tabel_guru.kode_guru', $kode_guru);
		return $this->db->get()->row_array();
	}

	public function laporan_guru($kode_mdta)
	{
		$laporan = array();
		$this->db->select('*');
		$this->db->from('tabel_guru');
		$this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');

		if ($kode_mdta == 'semua') {
			$laporan =  $this->db->get()->result_array();
		} else {
			$this->db->where('tabel_guru.kode_mdta', $kode_mdta);
			$laporan =  $this->db->get()->result_array();
		}
		return $laporan;
	}
}
