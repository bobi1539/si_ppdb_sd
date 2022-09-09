<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_kabupaten/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data Kabupaten
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_kabupaten">Id Kabupaten</label>
                        <input type="text" class="form-control" id="id_kabupaten" name="id_kabupaten" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="nm_kabupaten">Nama Kabupaten</label>
                        <input type="text" class="form-control" id="nm_kabupaten" name="nm_kabupaten" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="id_provinsi">Id Provinsi</label>
                        <select name="id_provinsi" class="form-control" id="id_provinsi">
                            <?php foreach ($data_provinsi as $data) : ?>
                                <option value="<?php echo $data['id_provinsi'] ?>">
                                    <?php echo $data['id_provinsi'] . " : " . $data['nm_provinsi'] ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <a href="<?php echo base_url('data_kabupaten') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>