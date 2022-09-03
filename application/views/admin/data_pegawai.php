<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <a href="<?php echo base_url('admin/tambah_pegawai') ?>" class="btn btn-sm btn-primary mb-3">
                    <i class="fas fa-plus fa-sm"></i> TAMBAH PEGAWAI
                </a>
                <?php echo $this->session->userdata('pesan') ?>
                <h5 class="text-center mb-3"> DATA PEGAWAI</h5>
                <div class="table-responsive">
                    <table class="table table-bordered id=" id="tabel-pegawai">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode Pegawai</th>
                                <th>Nama Pegawai</th>
                                <th>Alamat Pegawai</th>
                                <th>No Hp</th>
                                <th>Username</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($data_pegawai as $data) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['kode_pegawai'] ?></td>
                                    <td><?php echo $data['nama_pegawai'] ?></td>
                                    <td><?php echo $data['alamat_pegawai'] ?></td>
                                    <td><?php echo $data['no_hp'] ?></td>
                                    <td><?php echo $data['username'] ?></td>

                                    <td class="text-center">
                                        <?php if ($data['kode_pegawai'] != $this->session->userdata('kode_pegawai')) : ?>
                                            <a onclick="return confirm('Yakin Data dihapus ?')" href="<?php echo base_url('admin/hapus_pegawai/') . $data['kode_pegawai'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
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
</div>