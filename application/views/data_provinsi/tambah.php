<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_provinsi/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Provinsi
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_provinsi">Id Provinsi</label>
                        <input type="text" class="form-control" id="id_provinsi" name="id_provinsi" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="nm_provinsi">Nama Provinsi</label>
                        <input type="text" class="form-control" id="nm_provinsi" name="nm_provinsi" required maxlength="50">
                    </div>
                    <a href="<?php echo base_url('data_provinsi') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>