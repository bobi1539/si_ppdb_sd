<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Mdta_model extends CI_Model{


	public function tampil_data()
	{
        return $this->db->get('tabel_mdta')->result_array();
	}

	public function tampil_by_kode($kode_mdta)
	{
		$this->db->where('kode_mdta', $kode_mdta);
        return $this->db->get('tabel_mdta')->row_array();
	}
	
	public function tambah($data)
	{
		$this->db->insert('tabel_mdta',$data);
	}

	public function hapus_data($kode_mdta)
	{
		$this->db->where('kode_mdta', $kode_mdta);
		$this->db->delete('tabel_mdta');
	}

	public function update_data($kode_mdta, $data)
	{
		$this->db->where('kode_mdta', $kode_mdta);
		$this->db->update('tabel_mdta', $data);
	}


}