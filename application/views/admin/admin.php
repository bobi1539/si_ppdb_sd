<div class="row justify-content-center">
    <div class="col-lg-6">
        <form action="<?php echo base_url('admin/update_profil') ?>" method="POST">
            <div class="card my-4">
                <div class="card-body">
                    <?php echo $this->session->tempdata('pesan') ?>
                    <h3 class="text-center">My Profil</h3>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $user['username'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="kode_pegawai">Kode Pegawai</label>
                        <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai" readonly value="<?php echo $user['kode_pegawai'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required value="<?php echo $user['nama_pegawai'] ?>">
                    </div>
                    <div class=" form-group">
                        <label for="alamat_pegawai">Alamat Pegawai</label>
                        <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" required value="<?php echo $user['alamat_pegawai'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required value="<?php echo $user['no_hp'] ?>">
                    </div>
                    <button class="btn btn-danger float-right" type="submit">update</button>
                </div>
            </div>
        </form>
    </div>
</div>