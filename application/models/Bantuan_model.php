<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Bantuan_model extends CI_Model{


	public function tampil_data()
	{
        return $this->db->get('tabel_bantuan')->result_array();
	}

	public function jumlah_bantuan()
	{
		return $this->db->get('tabel_bantuan')->num_rows();
	}
	
	public function tambah($data)
	{
		$this->db->insert('tabel_bantuan',$data);
	}
	public function hapus_data($kode_bantuan)
	{
		$this->db->where('kode_bantuan', $kode_bantuan);
		$this->db->delete('tabel_bantuan');
	}

	public function tampil_by_kode($kode_bantuan){
		$this->db->where('kode_bantuan', $kode_bantuan);
		return $this->db->get('tabel_bantuan')->row_array();
	}

	public function update_data($kode_bantuan, $data)
	{
		$this->db->where('kode_bantuan', $kode_bantuan);
		$this->db->update('tabel_bantuan', $data);
	}

}