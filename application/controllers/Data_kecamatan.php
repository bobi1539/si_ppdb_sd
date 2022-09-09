<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_kecamatan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_kecamatan';
        $data['data_kecamatan'] = $this->Kecamatan_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_kecamatan/data_kecamatan', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_kecamatan';
        $data['data_kabupaten'] = $this->Kabupaten_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_kecamatan/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_kecamatan = $this->input->post('id_kecamatan', true);
        $nm_kecamatan = $this->input->post('nm_kecamatan', true);
        $id_kabupaten = $this->input->post('id_kabupaten', true);

        $kecamatan = $this->Kecamatan_model->tampil_by_id($id_kecamatan);

        if ($kecamatan) {
            pesan('Data dengan id kecamatan ' . $id_kecamatan . ' telah ada', 'danger');
            redirect('data_kecamatan');
        }

        $data = array(
            'id_kecamatan' => $id_kecamatan,
            'nm_kecamatan' => $nm_kecamatan,
            'id_kabupaten' => $id_kabupaten,
        );
        $this->Kecamatan_model->tambah_data($data);
        pesan('Data kecamatan berhasil ditambahkan', 'success');
        redirect('data_kecamatan');
    }

    public function hapus($id_kecamatan)
    {
        $kecamatan_di_kelurahan = $this->Kelurahan_model->tampil_by_id_kecamatan($id_kecamatan);
        if ($kecamatan_di_kelurahan) {
            pesan('Data kecamatan gagal dihapus karena ada di kelurahan', 'danger');
            redirect('data_kecamatan');
        } else {
            $this->Kecamatan_model->hapus_data($id_kecamatan);
            pesan('Data kecamatan berhasil dihapus', 'success');
            redirect('data_kecamatan');
        }
    }
}
