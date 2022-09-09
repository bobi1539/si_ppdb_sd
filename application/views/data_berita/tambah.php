<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_berita/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Berita
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_berita">Id Berita</label>
                        <input type="text" class="form-control" id="id_berita" name="id_berita" required>
                    </div>
                    <div class="form-group">
                        <label for="tgl_berita">Tanggal Berita</label>
                        <input type="date" class="form-control" id="tgl_berita" name="tgl_berita" required>
                    </div>
                    <div class="form-group">
                        <label for="judul_berita">Judul Berita</label>
                        <input type="text" class="form-control" id="judul_berita" name="judul_berita" required>
                    </div>
                    <div class="form-group">
                        <label for="isi_berita">Isi Berita</label>
                        <input type="isi_berita" class="form-control" id="isi_berita" name="isi_berita" required>
                    </div>
                    <a href="<?php echo base_url('data_berita') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>