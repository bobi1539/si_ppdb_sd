<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card card-body shadow mt-5 mb-5">
                <h3 class="text-center">Registrasi</h3>

                <?php echo $this->session->tempdata('pesan') ?>

                <form action="<?php echo base_url('login/registrasi_aksi') ?>" method="POST">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input name="username" type="text" class="form-control" id="username" required>

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control" id="password" required>
                    </div>
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
                        <input name="nama_guru" type="text" class="form-control" id="nama_guru" required>
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input name="tempat_lahir" type="text" class=" form-control" id="tempat_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input name="tanggal_lahir" type="date" class="form-control" id="tanggal_lahir" required>
                    </div>
                    <div class="form-group">
                        <label for="no_rekening">No Rekening</label>
                        <input name="no_rekening" type="text" class="form-control" id="no_rekening" required>
                    </div>
                    <div class="form-group">
                        <label for="masa_kerja">Masa Kerja</label>
                        <input name="masa_kerja" type="text" class="form-control" id="masa_kerja" required>
                    </div>

                    <button type="submit" class="btn btn-danger col-md-12 mb-3">Daftar</button>

                </form>
                <a class="text-center" href="<?php echo base_url('login/index') ?>">login</a>

            </div>
        </div>
    </div>
</div>