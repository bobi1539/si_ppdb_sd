<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Data_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		is_login();
	}


	public function index()
	{
		$data['aktif'] = 'data_user';
		$data['user'] = $this->session->userdata();
		$this->load->view('template/header');
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('data_user/data_user', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function update_profil()
	{
		$kode_pegawai = $this->input->post('kode_pegawai', true);
		$nama_pegawai = $this->input->post('nama_pegawai', true);
		$alamat_pegawai = $this->input->post('alamat_pegawai', true);
		$no_hp = $this->input->post('no_hp', true);

		$data = [
			'nama_pegawai' => $nama_pegawai,
			'alamat_pegawai' => $alamat_pegawai,
			'no_hp' => $no_hp,
		];

		$this->Pegawai_model->update_data($kode_pegawai, $data);
		$this->session->set_userdata($data);
		pesan('Profil berhasil di update', 'success');
		redirect('admin');
	}

	//===============================================================================================
	public function data_mdta()
	{

		$data['aktif'] = 'data_mdta';
		$data['data_mdta'] = $this->Mdta_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/data_mdta', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}
	public function tambah_mdta()
	{
		$data['aktif'] = 'data_mdta';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/tambah_mdta', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}
	public function tambah_aksi_mdta()
	{
		$nama_mdta = $this->input->post('nama_mdta', true);
		$jumlah_murid = $this->input->post('jumlah_murid', true);
		$nagri = $this->input->post('nagari', true);
		$jorong = $this->input->post('jorong', true);

		$data = array(
			'nama_mdta' => $nama_mdta,
			'jumlah_murid' => $jumlah_murid,
			'nagari' => $nagri,
			'jorong' => $jorong
		);
		$this->Mdta_model->tambah($data);
		pesan('Data mdta berhasil ditambahkan', 'success');
		redirect('admin/data_mdta');
	}
	public function hapus_mdta($kode_mdta)
	{
		$this->Mdta_model->hapus_data($kode_mdta);
		pesan('Data mdta berhasil dihapus', 'success');
		redirect('admin/data_mdta');
	}

	public function edit_mdta($kode_mdta)
	{
		$data['aktif'] = 'data_mdta';
		$data['data_mdta'] = $this->Mdta_model->tampil_by_kode($kode_mdta);
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/edit_mdta', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function edit_aksi_mdta()
	{
		$kode_mdta = $this->input->post('kode_mdta', true);
		$nama_mdta = $this->input->post('nama_mdta', true);
		$jumlah_murid = $this->input->post('jumlah_murid', true);
		$nagri = $this->input->post('nagari', true);
		$jorong = $this->input->post('jorong', true);

		$data = array(
			'nama_mdta' => $nama_mdta,
			'jumlah_murid' => $jumlah_murid,
			'nagari' => $nagri,
			'jorong' => $jorong
		);
		$this->Mdta_model->update_data($kode_mdta, $data);
		pesan('Data mdta berhasil di ubah', 'success');
		redirect('admin/data_mdta');
	}
	//===============================================================================================

	//===============================================================================================
	public function data_guru()
	{
		$data['data_guru'] = $this->Guru_model->tampil_data();
		$data['aktif'] = 'data_guru';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/data_guru', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}
	public function tambah_guru()
	{
		$data['aktif'] = 'data_guru';
		$data['data_mdta'] = $this->Mdta_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/tambah_guru', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function detail_guru($kode_guru)
	{
		$data['aktif'] = 'data_guru';
		$data['data_guru'] = $this->Guru_model->tampil_by_kode($kode_guru);
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/detail_guru', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function hapus_guru($kode_guru)
	{
		$this->Guru_model->hapus_data($kode_guru);
		pesan('Data guru berhasil dihapus', 'success');
		redirect('admin/data_guru');
	}

	public function tambah_aksi_guru()
	{
		$nama_guru = $this->input->post('nama_guru', true);
		$tempat_lahir = $this->input->post('tempat_lahir', true);
		$tanggal_lahir = $this->input->post('tanggal_lahir', true);
		$no_rekening = $this->input->post('no_rekening', true);
		$masa_kerja = $this->input->post('masa_kerja', true);

		$data = array(
			'nama_guru' => $nama_guru,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'no_rekening' => $no_rekening,
			'masa_kerja' => $masa_kerja
		);
		$this->Guru_model->tambah($data);
		pesan('Data guru berhasil ditambahkan', 'success');
		redirect('admin/data_guru');
	}

	public function edit_guru($kode_guru)
	{
		$data['aktif'] = 'data_guru';
		$data['data_guru'] = $this->Guru_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/tambah_guru', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}
	//===============================================================================================

	//===============================================================================================
	public function data_pegawai()
	{
		$data['data_pegawai'] = $this->Pegawai_model->tampil_data();
		$data['aktif'] = 'data_pegawai';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/data_pegawai', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}
	public function tambah_pegawai()
	{
		$data['aktif'] = 'data_pegawai';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/tambah_pegawai');
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function tambah_pegawai_aksi()
	{
		$kode_pegawai = $this->input->post('kode_pegawai', true);
		$nama_pegawai = $this->input->post('nama_pegawai', true);
		$alamat_pegawai = $this->input->post('alamat_pegawai', true);
		$no_hp = $this->input->post('no_hp', true);
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);

		$pegawai = $this->Pegawai_model->tampil_by_kode($kode_pegawai);
		$login = $this->Login_model->tampil_by_username($username);

		if ($pegawai) {
			pesan('kode pegawai : ' . $kode_pegawai . ' telah terdaftar', 'danger');
			redirect('admin/data_pegawai');
		} else {
			if ($login) {
				pesan('Username telah terdaftar', 'danger');
				redirect('admin/data_pegawai');
			} else {

				$data_pegawai = array(
					'kode_pegawai' => $kode_pegawai,
					'nama_pegawai' => $nama_pegawai,
					'alamat_pegawai' => $alamat_pegawai,
					'no_hp' => $no_hp
				);


				$this->Pegawai_model->tambah_data($data_pegawai);

				$data_login = array(
					'username' => $username,
					'password' => password_hash($password, PASSWORD_BCRYPT),
					'kode_pegawai' => $kode_pegawai,
					'level' => 'admin'
				);

				$this->Login_model->tambah_data($data_login);

				pesan('Data pegawai berhasil ditambahkan', 'success');
				redirect('admin/data_pegawai');
			}
		}
	}

	public function hapus_pegawai($kode_pegawai)
	{
		$this->Pegawai_model->hapus_data($kode_pegawai);
		$this->Login_model->hapus_data($kode_pegawai);
		pesan('Data pegawai berhasil dihapus', 'success');
		redirect('admin/data_pegawai');
	}

	//===============================================================================================
	public function data_bantuan()
	{
		$data['data_bantuan'] = $this->Bantuan_model->tampil_data();
		$data['aktif'] = 'data_bantuan';
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/data_bantuan', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}
	public function tambah_bantuan()
	{
		$data['aktif'] = 'data_bantuan';
		$data['data_bantuan'] = $this->Bantuan_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/tambah_bantuan', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function hapus_bantuan($kode_bantuan)
	{
		$this->Bantuan_model->hapus_data($kode_bantuan);
		pesan('Data bantuan berhasil dihapus', 'success');
		redirect('admin/data_bantuan');
	}

	public function tambah_aksi_bantuan()
	{
		$kode_bantuan = $this->input->post('kode_bantuan', true);
		$jenis_bantuan = $this->input->post('jenis_bantuan', true);
		$jumlah_bantuan = $this->input->post('jumlah_bantuan', true);

		$data_bantuan = $this->Bantuan_model->tampil_by_kode($kode_bantuan);

		if ($data_bantuan) {
			pesan('Data dengan kode bantuan : ' . $kode_bantuan . ' telah tersedia', 'danger');
			redirect('admin/data_bantuan');
		} else {

			$data = array(
				'kode_bantuan' => $kode_bantuan,
				'jenis_bantuan' => $jenis_bantuan,
				'jumlah_bantuan' => $jumlah_bantuan

			);
			$this->Bantuan_model->tambah($data);
			pesan('Data bantuan berhasil ditambahkan', 'success');
			redirect('admin/data_bantuan');
		}
	}

	public function edit_bantuan($kode_bantuan)
	{
		$data['aktif'] = 'data_bantuan';
		$data['data_bantuan'] = $this->Bantuan_model->tampil_by_kode($kode_bantuan);
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/edit_bantuan', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function edit_aksi_bantuan()
	{
		$kode_bantuan = $this->input->post('kode_bantuan', true);
		$jenis_bantuan = $this->input->post('jenis_bantuan', true);
		$jumlah_bantuan = $this->input->post('jumlah_bantuan', true);

		$data = array(
			'jenis_bantuan' => $jenis_bantuan,
			'jumlah_bantuan' => $jumlah_bantuan
		);
		$this->Bantuan_model->update_data($kode_bantuan, $data);
		pesan('Data bantuan berhasil diubah', 'success');
		redirect('admin/data_bantuan');
	}

	//===============================================================================================
	public function data_transaksi()
	{
		$data['aktif'] = 'data_transaksi';
		$data['transaksi'] = $this->Transaksi_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/data_transaksi', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function detaiL_transaksi($kode_transaksi)
	{
		$data['aktif'] = 'data_transaksi';
		$data['transaksi'] = $this->Transaksi_model->tampil_by_kode($kode_transaksi);
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/detail_transaksi', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function pilih_guru()
	{
		$data['aktif'] = 'data_transaksi';
		$data['data_guru'] = $this->Guru_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/pilih_guru');
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function tambah_transaksi($kode_guru)
	{
		$data['aktif'] = 'data_transaksi';
		$data['data_guru'] = $this->Guru_model->tampil_by_kode($kode_guru);
		$data['data_bantuan'] = $this->Bantuan_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/tambah_transaksi');
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function tambah_transaksi_aksi()
	{
		$kode_transaksi  = $this->input->post('kode_transaksi', true);
		$tanggal_transaksi  = $this->input->post('tanggal_transaksi', true);
		$kode_bantuan  = $this->input->post('kode_bantuan', true);
		$kode_guru  = $this->input->post('kode_guru', true);

		$transaksi = $this->Transaksi_model->tampil_by_kode($kode_transaksi);

		if ($transaksi) {
			pesan('Kode transaksi : ' . $kode_transaksi . ' telah tersedia', 'danger');
			redirect('admin/data_transaksi');
		} else {

			$data_transaksi = [
				'kode_transaksi' => $kode_transaksi,
				'tanggal_transaksi' => $tanggal_transaksi,
				'kode_bantuan' => $kode_bantuan,
				'kode_guru' => $kode_guru,
			];

			$this->Transaksi_model->tambah_data($data_transaksi);
			pesan('Data berhasil ditambahkan', 'success');
			redirect('admin/data_transaksi');
		}
	}

	public function hapus_transaksi($kode_transaksi)
	{
		$this->Transaksi_model->hapus($kode_transaksi);
		pesan('Data berhasil dihapus', 'success');
		redirect('admin/data_transaksi');
	}

	//===============================================================================================


	public function tambah_aksi_pegawai()
	{
		$kode_pegawai = $this->input->post('kode_pegawai', true);
		$nama_pegawai = $this->input->post('nama_pegawai', true);
		$alamat_pegawai = $this->input->post('alamat_pegawai', true);
		$no_hp = $this->input->post('no_hp', true);

		$data = array(
			'kode_pegawai' => $kode_pegawai,
			'nama_pegawai' => $nama_pegawai,
			'alamat_pegawai' => $alamat_pegawai,
			'no_hp' => $no_hp
		);
		$this->pegawai_model->tambah($data);
		redirect('admin/data_pegawai');
	}

	//===============================================================================================

	public function laporan()
	{
		$data['aktif'] = 'laporan';
		$data['bantuan'] = $this->Bantuan_model->tampil_data();
		$data['data_mdta'] = $this->Mdta_model->tampil_data();
		$this->load->view('template/header');
		$this->load->view('template/navbar', $data);
		$this->load->view('template/sidebar_admin', $data);
		$this->load->view('admin/laporan', $data);
		$this->load->view('template/end_sidebar');
		$this->load->view('template/footer');
	}

	public function laporan_transaksi()
	{
		$kode_bantuan = $this->input->post('kode_bantuan', true);
		$tanggal = $this->input->post('tanggal', true);
		$bulan = $this->input->post('bulan', true);
		$tahun = $this->input->post('tahun', true);

		$data['laporan'] = $this->Transaksi_model->laporan_transaksi($kode_bantuan, $tanggal, $bulan, $tahun);
		$data['bantuan'] = $this->Bantuan_model->tampil_data();
		$data['jumlah_bantuan'] = $this->Bantuan_model->jumlah_bantuan();
		$data['tanggal'] = $tanggal;
		$data['bulan'] = $bulan;
		$data['tahun'] = $tahun;

		$this->load->view('template/header');
		$this->load->view('admin/laporan_transaksi', $data);
		$this->load->view('template/footer');
	}

	public function laporan_guru_mdta()
	{
		$kode_mdta = $this->input->post('kode_mdta', true);
		$data['laporan'] = $this->Guru_model->laporan_guru($kode_mdta);

		$this->load->view('template/header');
		$this->load->view('admin/laporan_guru_mdta', $data);
		$this->load->view('template/footer');
	}
}
