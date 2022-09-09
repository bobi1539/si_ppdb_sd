<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_kecamatan/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Kecamatan
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_kecamatan">Id Kecamatan</label>
                        <input type="text" class="form-control" id="id_kecamatan" name="id_kecamatan" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="nm_kecamatan">Nama Kecamatan</label>
                        <input type="text" class="form-control" id="nm_kecamatan" name="nm_kecamatan" required maxlength="30">
                    </div>
                    <div class="form-group">
                        <label for="id_kabupaten">Id Kabupaten</label>
                        <select name="id_kabupaten" class="form-control" id="id_kabupaten">
                            <?php foreach ($data_kabupaten as $data) : ?>
                                <option value="<?php echo $data['id_kabupaten'] ?>">
                                    <?php echo $data['id_kabupaten'] . " : " . $data['nm_kabupaten'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <a href="<?php echo base_url('data_kecamatan') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>