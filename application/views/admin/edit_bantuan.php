
<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form action="<?php echo base_url('admin/edit_aksi_bantuan') ?>" method="POST">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Data Bantuan</h2>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_bantuan">Kode Bantuan</label>
                        <input type="text" class="form-control" id="kode_bantuan" name="kode_bantuan" readonly value="<?php echo $data_bantuan['kode_bantuan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jenis_bantuan">Jenis Bantuan</label>
                        <input type="text" class="form-control" id="jenis_bantuan" name="jenis_bantuan" required value="<?php echo $data_bantuan['jenis_bantuan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_bantuan">Jumlah Bantuan</label>
                        <input type="text" class="form-control" id="jumlah_bantuan" name="jumlah_bantuan" required value="<?php echo $data_bantuan['jumlah_bantuan'] ?>">
                    </div>
                    <a href="<?php echo base_url('admin/data_bantuan') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn float-right btn-danger col-md-2 mb-3">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>