<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		$data['aktif'] = 'login';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('login/login');
		$this->load->view('template/footer');
	}

	public function registrasi()
	{
		$data['aktif'] = 'login';
		$data['data_mdta'] = $this->Mdta_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('login/registrasi', $data);
		$this->load->view('template/footer');
	}

	public function registrasi_aksi()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$kode_mdta = $this->input->post('kode_mdta', true);
		$nama_guru = $this->input->post('nama_guru', true);
		$tempat_lahir = $this->input->post('tempat_lahir', true);
		$tanggal_lahir = $this->input->post('tanggal_lahir', true);
		$no_rekening = $this->input->post('no_rekening', true);
		$masa_kerja = $this->input->post('masa_kerja', true);

		$login = $this->Login_model->tampil_by_username($username);
		if (!$login) {
			$data_guru = [
				'kode_mdta' => $kode_mdta,
				'nama_guru' => $nama_guru,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'no_rekening' => $no_rekening,
				'masa_kerja' => $masa_kerja,
			];

			$kode_guru = $this->Guru_model->tambah_data($data_guru);

			$data_login = [
				'username' => $username,
				'password' => password_hash($password, PASSWORD_BCRYPT),
				'kode_guru' => $kode_guru,
				'level' => 'user'
			];

			$this->Login_model->tambah_data($data_login);

			pesan('Registrasi berhasil, silahkan login', 'success');
			redirect('login');
		} else {
			pesan('Username telah tersedia', 'danger');
			redirect('login/registrasi');
		}
	}

	public function login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$login = $this->Login_model->tampil_by_username($username);

		if ($login) {
			if (password_verify($password, $login['password'])) {

				if ($login['level'] == 'admin' || $login['level'] == 'walinagari') {
					$pegawai = $this->Pegawai_model->tampil_by_kode($login['kode_pegawai']);
					$data_session = $login + $pegawai;
					$this->session->set_userdata($data_session);
					redirect('admin');
				} else {
					$guru = $this->Guru_model->tampil_by_kode($login['kode_guru']);
					$data_session = $login + $guru;
					$this->session->set_userdata($data_session);
					redirect('user');
				}
			} else {
				pesan('Password salah', 'danger');
				redirect('login');
			}
		} else {
			pesan('Username tidak tersedia', 'danger');
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function cek_session()
	{
		echo json_encode($this->session->userdata());
	}
}
