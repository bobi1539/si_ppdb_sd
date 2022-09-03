<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST"action="<?php echo base_url('admin/tambah_aksi_guru') ?>">
        <div class="card">
            <div class="card-header ">
                FROM INPUT GURU
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="kode_mdta">Nama MDTA</label>
                    <select name="kode_mdta" class="form-control" id="kode_mdta">
                        <option value="pilih">--Pilih--</option>

                        <?php foreach($data_mdta as $data): ?>
                            <option value="<?php echo $data['kode_mdta'] ?>"><?php echo $data['nama_mdta'] ?></option>
                        <?php endforeach ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_guru">Nama Guru</label>
                    <input type="text" class="form-control" id="nama_guru" name="nama_guru" required>
                </div>
                <div class="form-group">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>
                <div class="form-group">
                    <label for="no_rekening">No Rekening</label>
                    <input type="text" class="form-control" id="no_rekening" name="no_rekening" required>
                </div>
                <div class="form-group">
                    <label for="masa_kerja">Masa Kerja</label>
                    <input type="text" class="form-control" id="masa_kerja" name="masa_kerja" required>
                </div>
                <a href="<?php echo base_url('admin/data_guru') ?>" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-danger float-right col-md-2 mb-3">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
