<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_kelurahan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_kelurahan';
        $data['data_kelurahan'] = $this->Kelurahan_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_kelurahan/data_kelurahan', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_kelurahan';
        $data['data_kecamatan'] = $this->Kecamatan_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_kelurahan/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_kelurahan = $this->input->post('id_kelurahan', true);
        $nm_kelurahan = $this->input->post('nm_kelurahan', true);
        $id_kecamatan = $this->input->post('id_kecamatan', true);

        $kelurahan = $this->Kelurahan_model->tampil_by_id($id_kelurahan);

        if ($kelurahan) {
            pesan('Data dengan id kelurahan ' . $id_kelurahan . ' telah ada', 'danger');
            redirect('data_kelurahan');
        }

        $data = array(
            'id_kelurahan' => $id_kelurahan,
            'nm_kelurahan' => $nm_kelurahan,
            'id_kecamatan' => $id_kecamatan,
        );
        $this->Kelurahan_model->tambah_data($data);
        pesan('Data kelurahan berhasil ditambahkan', 'success');
        redirect('data_kelurahan');
    }

    public function hapus($id_kelurahan)
    {
        $this->Kelurahan_model->hapus_data($id_kelurahan);
        pesan('Data kelurahan berhasil dihapus', 'success');
        redirect('data_kelurahan');
    }
}
