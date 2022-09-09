<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_kelurahan/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Kelurahan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_kelurahan">Id Kelurahan</label>
                        <input type="text" class="form-control" id="id_kelurahan" name="id_kelurahan" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="nm_kelurahan">Nama Kelurahan</label>
                        <input type="text" class="form-control" id="nm_kelurahan" name="nm_kelurahan" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="id_kecamatan">Id Kecamatan</label>
                        <select name="id_kecamatan" class="form-control" id="id_kecamatan">
                            <?php foreach ($data_kecamatan as $data) : ?>
                                <option value="<?php echo $data['id_kecamatan'] ?>">
                                    <?php echo $data['id_kecamatan'] . " : " . $data['nm_kecamatan'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <a href="<?php echo base_url('data_kelurahan') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>