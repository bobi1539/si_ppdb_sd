<div class="row justify-content-center my-4">
    <div class="col-lg-6">
        <form method="POST" action="<?php echo base_url('data_user/tambah_aksi') ?>">
            <div class="card">
                <div class="card-header ">
                    Tambah Data User
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_user">Id User</label>
                        <input type="text" class="form-control" id="id_user" name="id_user" required>
                    </div>
                    <div class="form-group">
                        <label for="nm_user">Nama User</label>
                        <input type="text" class="form-control" id="nm_user" name="nm_user" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="admin">admin</option>
                            <option value="user">user</option>
                        </select>
                    </div>
                    <a href="<?php echo base_url('data_user') ?>" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary float-right col-md-2 mb-3">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>