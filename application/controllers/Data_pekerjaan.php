<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_pekerjaan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_pekerjaan';
        $data['data_pekerjaan'] = $this->Pekerjaan_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_pekerjaan/data_pekerjaan', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_pekerjaan';
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_pekerjaan/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_pekerjaan = $this->input->post('id_pekerjaan', true);
        $nm_pekerjaan = $this->input->post('nm_pekerjaan', true);

        $pekerjaan = $this->Pekerjaan_model->tampil_by_id($id_pekerjaan);

        if ($pekerjaan) {
            pesan('Data dengan id pekerjaan ' . $id_pekerjaan . ' telah ada', 'danger');
            redirect('data_pekerjaan');
        }

        $data = array(
            'id_pekerjaan' => $id_pekerjaan,
            'nm_pekerjaan' => $nm_pekerjaan,
        );
        $this->Pekerjaan_model->tambah_data($data);
        pesan('Data pekerjaan berhasil ditambahkan', 'success');
        redirect('data_pekerjaan');
    }

    public function hapus($id_pekerjaan)
    {
        $this->Pekerjaan_model->hapus_data($id_pekerjaan);
        pesan('Data pekerjaan berhasil dihapus', 'success');
        redirect('data_pekerjaan');
    }
}
