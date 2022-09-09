<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_agama extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_agama';
        $data['data_agama'] = $this->Agama_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_agama/data_agama', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_agama';
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_agama/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_agama = $this->input->post('id_agama', true);
        $nm_agama = $this->input->post('nm_agama', true);

        $agama = $this->Agama_model->tampil_by_id($id_agama);

        if ($agama) {
            pesan('Data dengan id agama ' . $id_agama . ' telah ada', 'danger');
            redirect('data_agama');
        }

        $data = array(
            'id_agama' => $id_agama,
            'nm_agama' => $nm_agama,
        );
        $this->Agama_model->tambah_data($data);
        pesan('Data agama berhasil ditambahkan', 'success');
        redirect('data_agama');
    }

    public function hapus($id_kabupaten)
    {
        $kabupaten_by_id = $this->Kecamatan_model->tampil_by_id_kabupaten($id_kabupaten);
        if ($kabupaten_by_id) {
            pesan('Data kabupaten gagal dihapus karena ada di kecamatan', 'danger');
            redirect('data_agama');
        } else {
            $this->Agama_model->hapus_data($id_kabupaten);
            pesan('Data kabupaten berhasil dihapus', 'success');
            redirect('data_agama');
        }
    }
}
