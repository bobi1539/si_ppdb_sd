<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
		is_user();
	}


	public function index()
	{
		$data['aktif'] = 'my_akun';
		$data['user'] = $this->session->userdata();
		$data['data_mdta'] = $this->Mdta_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_user', $data);
		$this->load->view('user/user', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function update_profil()
	{
		$username = $this->input->post('username', true);
		$kode_guru = $this->input->post('kode_guru', true);
		$nama_guru = $this->input->post('nama_guru', true);
		$tempat_lahir = $this->input->post('tempat_lahir', true);
		$tanggal_lahir = $this->input->post('tanggal_lahir', true);
		$no_rekening = $this->input->post('no_rekening', true);
		$masa_kerja = $this->input->post('masa_kerja', true);
		$kode_mdta = $this->input->post('kode_mdta', true);

		$data = [
			'nama_guru' => $nama_guru,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'no_rekening' => $no_rekening,
			'masa_kerja' => $masa_kerja,
			'kode_mdta' => $kode_mdta,
		];

		$this->Guru_model->update_data($kode_guru, $data);
		$this->session->set_userdata($data);
		pesan('Profil berhasil di update', 'success');
		redirect('user');
	}

	public function data_bantuan()
	{
		$data['aktif'] = 'data_bantuan';
		$kode_guru = $this->session->userdata('kode_guru');
		$data['transaksi'] = $this->Transaksi_model->tampil_by_kode_guru($kode_guru);
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_user', $data);
		$this->load->view('user/data_bantuan', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function detaiL_transaksi($kode_transaksi)
    {
        $data['aktif'] = 'data_transaksi';
        $data['transaksi'] = $this->Transaksi_model->tampil_by_kode($kode_transaksi);
        $this->load->view('template/header');
        $this->load->view('template/navbar', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('user/detail_bantuan', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }
}
