<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_pekerjaan/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Pekerjaan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pekerjaan">Id Pekerjaan</label>
                        <input type="text" class="form-control" id="id_pekerjaan" name="id_pekerjaan" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="nm_pekerjaan">Nama Pekerjaan</label>
                        <input type="text" class="form-control" id="nm_pekerjaan" name="nm_pekerjaan" required maxlength="30">
                    </div>
                    <a href="<?php echo base_url('data_pekerjaan') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>