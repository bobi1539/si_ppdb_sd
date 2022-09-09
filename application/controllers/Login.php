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

	public function login()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$login = $this->User_model->tampil_by_username($username);

		if (!$login) {
			pesan('Username tidak tersedia', 'danger');
			redirect('login');
		}

		if ($password != $login["password"]) {
			pesan('Password salah', 'danger');
			redirect('login');
		}

		$this->session->set_userdata($login);
		if ($login['status'] == 'admin') {
			redirect('data_user');
		} else {
			redirect('penerimaan');
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
