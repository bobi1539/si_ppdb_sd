<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_agama/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Agama
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_agama">Id Agama</label>
                        <input type="text" class="form-control" id="id_agama" name="id_agama" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="nm_agama">Nama Agama</label>
                        <input type="text" class="form-control" id="nm_agama" name="nm_agama" required maxlength="30">
                    </div>
                    <a href="<?php echo base_url('data_agama') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>