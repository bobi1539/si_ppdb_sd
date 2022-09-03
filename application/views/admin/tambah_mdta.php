<div class="row justify-content-center mt-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('admin/tambah_aksi_mdta') ?>">
            <div class="card">
                <div class="card-header">
                    FROM INPUT MDTA
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama_mdta">Nama Mdta</label>
                        <input type="text" class="form-control" id="nama_mdta" name="nama_mdta" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_murid">Jumlah Murid</label>
                        <input type="text" class="form-control" id="jumlah_murid" name="jumlah_murid" required>
                    </div>
                    <div class="form-group">
                        <label for="nagari">Nagari</label>
                        <input type="text" class="form-control" id="nagari" name="nagari" required>
                    </div>
                    <div class="form-group">
                        <label for="jorong">jorong</label>
                        <input type="text" class="form-control" id="jorong" name="jorong" required>
                    </div>
                    <br>
                    <a href="<?php echo base_url('admin/data_mdta') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="float-right btn btn-danger col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
