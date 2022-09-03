<div class="row justify-content-center">
    <div class="col-lg-6">
        <form action="<?php echo base_url('user/update_profil') ?>" method="POST">
            <div class="card my-4">
                <div class="card-body">
                    <?php echo $this->session->tempdata('pesan') ?>
                    <h3 class="text-center">My Profil</h3>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $user['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_guru">Kode Guru</label>
                        <input type="text" class="form-control" id="kode_guru" name="kode_guru" readonly value="<?php echo $user['kode_guru'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_guru">Nama Guru</label>
                        <input type="text" class="form-control" id="nama_guru" name="nama_guru" required value="<?php echo $user['nama_guru'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required value="<?php echo $user['tempat_lahir'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required value="<?php echo $user['tanggal_lahir'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="no_rekening">No Rekening</label>
                        <input type="text" class="form-control" id="no_rekening" name="no_rekening" required value="<?php echo $user['no_rekening'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="masa_kerja">Masa Kerja</label>
                        <input type="text" class="form-control" id="masa_kerja" name="masa_kerja" required value="<?php echo $user['masa_kerja'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_mdta">Nama MDTA</label>
                        <select name="kode_mdta" class="form-control" id="kode_mdta">
                            <option value="<?php echo $user['kode_mdta'] ?>"><?php echo $user['nama_mdta'] ?></option>

                            <?php foreach ($data_mdta as $data) : ?>
                                <option value="<?php echo $data['kode_mdta'] ?>"><?php echo $data['nama_mdta'] ?></option>
                            <?php endforeach ?>

                        </select>
                    </div>
                    <button class="btn btn-danger float-right" type="submit">update</button>
                </div>
            </div>
        </form>
    </div>
</div>