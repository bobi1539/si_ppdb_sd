<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_pendidikan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_pendidikan';
        $data['data_pendidikan'] = $this->Pendidikan_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_pendidikan/data_pendidikan', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_pendidikan';
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_pendidikan/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_pendidikan = $this->input->post('id_pendidikan', true);
        $nm_pendidikan = $this->input->post('nm_pendidikan', true);

        $pendidikan = $this->Pendidikan_model->tampil_by_id($id_pendidikan);

        if ($pendidikan) {
            pesan('Data dengan id pendidikan ' . $id_pendidikan . ' telah ada', 'danger');
            redirect('data_pendidikan');
        }

        $data = array(
            'id_pendidikan' => $id_pendidikan,
            'nm_pendidikan' => $nm_pendidikan,
        );
        $this->Pendidikan_model->tambah_data($data);
        pesan('Data pendidikan berhasil ditambahkan', 'success');
        redirect('data_pendidikan');
    }

    public function hapus($id_pendidikan)
    {
        $this->Pendidikan_model->hapus_data($id_pendidikan);
        pesan('Data pendidikan berhasil dihapus', 'success');
        redirect('data_pendidikan');
    }
}
