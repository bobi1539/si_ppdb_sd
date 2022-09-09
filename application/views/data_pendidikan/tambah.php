<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_pendidikan/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Pendidikan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pendidikan">Id Pendidikan</label>
                        <input type="text" class="form-control" id="id_pendidikan" name="id_pendidikan" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="nm_pendidikan">Nama Pendidikan</label>
                        <input type="text" class="form-control" id="nm_pendidikan" name="nm_pendidikan" required maxlength="30">
                    </div>
                    <a href="<?php echo base_url('data_pendidikan') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>