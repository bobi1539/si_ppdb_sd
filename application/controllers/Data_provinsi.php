<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_provinsi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_provinsi';
        $data['data_provinsi'] = $this->Provinsi_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_provinsi/data_provinsi', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_provinsi';
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_provinsi/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_provinsi = $this->input->post('id_provinsi', true);
        $nm_provinsi = $this->input->post('nm_provinsi', true);

        $provinsi = $this->Provinsi_model->tampil_by_id($id_provinsi);

        if ($provinsi) {
            pesan('Data dengan id provinsi ' . $id_provinsi . ' telah ada', 'danger');
            redirect('data_provinsi');
        }

        $data = array(
            'id_provinsi' => $id_provinsi,
            'nm_provinsi' => $nm_provinsi,
        );
        $this->Provinsi_model->tambah_data($data);
        pesan('Data provinsi berhasil ditambahkan', 'success');
        redirect('data_provinsi');
    }

    public function hapus($id_provinsi)
    {
        $provinsi_di_kabupaten = $this->Kabupaten_model->tampil_by_id_provinsi($id_provinsi);
        if ($provinsi_di_kabupaten) {
            pesan('Data provinsi tidak bisa dihapus karena ada di kabupaten', 'danger');
            redirect('data_provinsi');
        } else {
            $this->Provinsi_model->hapus_data($id_provinsi);
            pesan('Data provinsi berhasil dihapus', 'success');
            redirect('data_provinsi');
        }
    }
}
