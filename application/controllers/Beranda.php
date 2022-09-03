<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller{


	public function index()
	{
		$data['aktif'] = 'beranda';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('beranda/beranda');
		$this->load->view('template/footer');

	}

	public function fitur(){
		$data['aktif'] = 'fitur';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('beranda/fitur');
		$this->load->view('template/footer');
	}
}

