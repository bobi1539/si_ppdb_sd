<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{


    public function tambah_data($data)
    {
        $this->db->insert('tabel_transaksi', $data);
    }

    public function tampil_data()
    {
        $this->db->select('*');
        $this->db->from('tabel_transaksi');
        $this->db->join('tabel_guru', 'tabel_guru.kode_guru = tabel_transaksi.kode_guru');
        $this->db->join('tabel_bantuan', 'tabel_bantuan.kode_bantuan = tabel_transaksi.kode_bantuan');
        $this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');
        return $this->db->get()->result_array();
    }

    public function tampil_by_kode($kode_transaksi)
    {
        $this->db->select('*');
        $this->db->from('tabel_transaksi');
        $this->db->join('tabel_guru', 'tabel_guru.kode_guru = tabel_transaksi.kode_guru');
        $this->db->join('tabel_bantuan', 'tabel_bantuan.kode_bantuan = tabel_transaksi.kode_bantuan');
        $this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');
        $this->db->where('tabel_transaksi.kode_transaksi', $kode_transaksi);
        return $this->db->get()->row_array();
    }

    public function tampil_by_kode_guru($kode_guru)
    {
        $this->db->select('*');
        $this->db->from('tabel_transaksi');
        $this->db->join('tabel_guru', 'tabel_guru.kode_guru = tabel_transaksi.kode_guru');
        $this->db->join('tabel_bantuan', 'tabel_bantuan.kode_bantuan = tabel_transaksi.kode_bantuan');
        $this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');
        $this->db->where('tabel_guru.kode_guru', $kode_guru);
        return $this->db->get()->result_array();
    }

    public function hapus($kode_transaksi)
    {
        $this->db->where('kode_transaksi', $kode_transaksi);
        $this->db->delete('tabel_transaksi');
    }

    public function laporan_transaksi($kode_bantuan, $tanggal, $bulan, $tahun)
    {
        $tanggal_bulan_tahun = $tahun . '-' . $bulan . '-' . $tanggal;
        $bulan_tahun = $tahun . '-' . $bulan;

        $laporan = [];

        $this->db->select('*');
        $this->db->from('tabel_transaksi');
        $this->db->join('tabel_guru', 'tabel_guru.kode_guru = tabel_transaksi.kode_guru');
        $this->db->join('tabel_bantuan', 'tabel_bantuan.kode_bantuan = tabel_transaksi.kode_bantuan');
        $this->db->join('tabel_mdta', 'tabel_mdta.kode_mdta = tabel_guru.kode_mdta');

        if ($kode_bantuan == 'semua' && $tanggal != '' && $bulan != '' && $tahun != '') {
            $this->db->like('tabel_transaksi.tanggal_transaksi', $tanggal_bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($tanggal != '' && $bulan != '' && $tahun != '') {
            $this->db->where('tabel_transaksi.kode_bantuan', $kode_bantuan);
            $this->db->like('tabel_transaksi.tanggal_transaksi', $tanggal_bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($kode_bantuan == 'semua' && $bulan != '' && $tahun != '') {
            $this->db->like('tabel_transaksi.tanggal_transaksi', $bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($bulan != '' && $tahun != '') {
            $this->db->where('tabel_transaksi.kode_bantuan', $kode_bantuan);
            $this->db->like('tabel_transaksi.tanggal_transaksi', $bulan_tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($kode_bantuan == 'semua' && $tahun != '') {
            $this->db->like('tabel_transaksi.tanggal_transaksi', $tahun);
            $laporan = $this->db->get()->result_array();
        } else if ($tahun != '') {
            $this->db->where('tabel_transaksi.kode_bantuan', $kode_bantuan);
            $this->db->like('tabel_transaksi.tanggal_transaksi', $tahun);
            $laporan = $this->db->get()->result_array();
        } else {
            $laporan = null;
        }

        return $laporan;
    }
}
