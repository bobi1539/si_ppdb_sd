<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
	}


	public function index()
	{
		$data['aktif'] = 'data_user';
		$data['data_user'] = $this->User_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('data_user/data_user', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$data['aktif'] = 'data_user';
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('data_user/tambah', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function ubah($id_user)
	{
		$data['aktif'] = 'data_user';
		$data['data_user'] = $this->User_model->tampil_by_id($id_user);
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('data_user/ubah', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function tambah_aksi()
	{
		$id_user = $this->input->post('id_user', true);
		$nm_user = $this->input->post('nm_user', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$status = $this->input->post('status', true);

		$user = $this->User_model->tampil_by_username($username);

		$user_by_id = $this->User_model->tampil_by_id($id_user);

		if ($user) {
			pesan('Data dengan username ' . $username . ' telah ada', 'danger');
			redirect('data_user');
		}

		if ($user_by_id) {
			pesan('Data dengan id ' . $id_user . ' telah ada', 'danger');
			redirect('data_user');
		}

		$data = array(
			'id_user' => $id_user,
			'nm_user' => $nm_user,
			'username' => $username,
			'password' => $password,
			'status' => $status
		);
		$this->User_model->tambah_data($data);
		pesan('Data user berhasil ditambahkan', 'success');
		redirect('data_user');
	}

	public function hapus($id_user)
	{
		$this->User_model->hapus_data($id_user);
		pesan('Data user berhasil dihapus', 'success');
		redirect('data_user');
	}
}
