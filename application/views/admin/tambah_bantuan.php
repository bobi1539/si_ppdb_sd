
<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form action="<?php echo base_url('admin/tambah_aksi_bantuan') ?>" method="POST">
            <div class="card">
                <div class="card-header">
                    <h2>Input Data Bantuan</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_bantuan">Kode Bantuan</label>
                        <input type="text" class="form-control" id="kode_bantuan" name="kode_bantuan" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_bantuan">Jenis Bantuan</label>
                        <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_bantuan">Jumlah Bantuan</label>
                        <input type="text" class="form-control" id="jumlah_bantuan" name="jumlah_bantuan" required>
                    </div>
                    <a href="<?php echo base_url('admin/data_bantuan') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn float-right btn-danger col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>