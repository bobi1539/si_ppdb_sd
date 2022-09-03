<div class="row justify-content-center mt-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('admin/edit_aksi_mdta') ?>">
            <div class="card">
                <div class="card-header">
                    FROM EDIT MDTA
                </div>
                <div class="card-body">
                    <input type="hidden" name="kode_mdta" value="<?php echo $data_mdta['kode_mdta'] ?>">
                    <div class="form-group">
                        <label for="nama_mdta">Nama Mdta</label>
                        <input type="text" class="form-control" id="nama_mdta" name="nama_mdta" required value="<?php echo $data_mdta['nama_mdta'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_murid">Jumlah Murid</label>
                        <input type="text" class="form-control" id="jumlah_murid" name="jumlah_murid" required value="<?php echo $data_mdta['jumlah_murid'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nagari">Nagari</label>
                        <input type="text" class="form-control" id="nagari" name="nagari" required value="<?php echo $data_mdta['nagari'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="jorong">jorong</label>
                        <input type="text" class="form-control" id="jorong" name="jorong" required value="<?php echo $data_mdta['jorong'] ?>">
                    </div>
                    <br>
                    <a href="<?php echo base_url('admin/data_mdta') ?>" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="float-right btn btn-danger col-md-2 mb-3">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
