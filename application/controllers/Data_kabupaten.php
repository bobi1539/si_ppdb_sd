<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_kabupaten extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_kabupaten';
        $data['data_kabupaten'] = $this->Kabupaten_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_kabupaten/data_kabupaten', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_kabupaten';
        $data['data_provinsi'] = $this->Provinsi_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_kabupaten/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_kabupaten = $this->input->post('id_kabupaten', true);
        $nm_kabupaten = $this->input->post('nm_kabupaten', true);
        $id_provinsi = $this->input->post('id_provinsi', true);

        $kabupaten = $this->Kabupaten_model->tampil_by_id($id_kabupaten);

        if ($kabupaten) {
            pesan('Data dengan id kabupaten ' . $id_kabupaten . ' telah ada', 'danger');
            redirect('data_kabupaten');
        }

        $data = array(
            'id_kabupaten' => $id_kabupaten,
            'nm_kabupaten' => $nm_kabupaten,
            'id_provinsi' => $id_provinsi,
        );
        $this->Kabupaten_model->tambah_data($data);
        pesan('Data kabupaten berhasil ditambahkan', 'success');
        redirect('data_kabupaten');
    }

    public function hapus($id_kabupaten)
    {
        $this->Kabupaten_model->hapus_data($id_kabupaten);
        pesan('Data kabupaten berhasil dihapus', 'success');
        redirect('data_kabupaten');
    }
}
