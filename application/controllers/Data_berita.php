<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_berita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_login();
    }


    public function index()
    {
        $data['aktif'] = 'data_berita';
        $data['data_berita'] = $this->Berita_model->tampil_data();
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_berita/data_berita', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['aktif'] = 'data_berita';
        $this->load->view('template/header');
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('data_berita/tambah', $data);
        $this->load->view('template/end_sidebar');
        $this->load->view('template/footer');
    }

    public function tambah_aksi()
    {
        $id_berita = $this->input->post('id_berita', true);
        $tgl_berita = $this->input->post('tgl_berita', true);
        $judul_berita = $this->input->post('judul_berita', true);
        $isi_berita = $this->input->post('isi_berita', true);

        $berita = $this->Berita_model->tampil_by_id($id_berita);

        if ($berita) {
            pesan('Data dengan id berita ' . $id_berita . ' telah ada', 'danger');
            redirect('data_berita');
        }

        $data = array(
            'id_berita' => $id_berita,
            'tgl_berita' => $tgl_berita,
            'judul_berita' => $judul_berita,
            'isi_berita' => $isi_berita,
        );
        $this->Berita_model->tambah_data($data);
        pesan('Data berita berhasil ditambahkan', 'success');
        redirect('data_berita');
    }

    public function hapus($id_berita)
    {
        $this->Berita_model->hapus_data($id_berita);
        pesan('Data berita berhasil dihapus', 'success');
        redirect('data_berita');
    }
}
