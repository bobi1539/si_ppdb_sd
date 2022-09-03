<div class="row justify-content-center">
  <div class="col-lg-6">
    <form action="<?php echo base_url('admin/tambah_pegawai_aksi') ?>" method="POST">
      <div class="card my-4 ">
        <div class="card-header">
          <h3>Form Input Pegawai</h3>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="kode_pegawai">Kode Pegawai</label>
            <input type="text" class="form-control" id="kode_pegawai" name="kode_pegawai" required>
          </div>
          <div class="form-group">
            <label for="nama_pegawai">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" required>
          </div>
          <div class="form-group">
            <label for="alamat_pegawai">Alamat Pegawai</label>
            <input type="text" class="form-control" id="alamat_pegawai" name="alamat_pegawai" required>
          </div>
          <div class="form-group">
            <label for="no_hp">No HP</label>
            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <a href="<?php echo base_url('admin/data_pegawai') ?>" class="btn btn-secondary">Batal</a>
          <button type="submit" class="btn btn-danger float-right col-md-2 mb-3">Simpan</button>
        </div>
    </form>
  </div>
</div>
</div>