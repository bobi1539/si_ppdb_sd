<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card card-body">
            <?php echo $this->session->tempdata('pesan') ?>
            <h5 class="text-center mb-3"> DATA USER</h5>
            <div class="row my-3">
                <div class="col">
                    <a href="<?php echo base_url('data_user/tambah') ?>" class="btn btn-sm btn-primary">
                        input user
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="tabel-1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID USER</th>
                            <th>NAMA USER</th>
                            <th>USERNAME</th>
                            <th>STATUS</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_user as $data) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['id_user'] ?></td>
                                <td><?php echo $data['nm_user'] ?></td>
                                <td><?php echo $data['username'] ?></td>
                                <td><?php echo $data['status'] ?></td>
                                <td class="text-center" width="50">
                                    <?php if ($this->session->userdata('username') != $data['username']) : ?>
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_user/hapus/' . $data['id_user']) ?>">
                                            hapus
                                        </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>