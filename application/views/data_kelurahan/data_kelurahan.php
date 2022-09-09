<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card card-body">
            <?php echo $this->session->tempdata('pesan') ?>
            <h5 class="text-center mb-3"> DATA KELURAHAN</h5>
            <div class="row my-3">
                <div class="col">
                    <a href="<?php echo base_url('data_kelurahan/tambah') ?>" class="btn btn-sm btn-primary">
                        input kelurahan
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="tabel-1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID KELURAHAN</th>
                            <th>NAMA KELURAHAN</th>
                            <th>ID KECAMATAN</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_kelurahan as $data) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['id_kelurahan'] ?></td>
                                <td><?php echo $data['nm_kelurahan'] ?></td>
                                <td><?php echo $data['id_kecamatan'] ?></td>
                                <td class="text-center" width="50">
                                    <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_kelurahan/hapus/' . $data['id_kelurahan']) ?>">
                                        hapus
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>