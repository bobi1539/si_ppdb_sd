<div class="row mt-4">
    <div class="col-lg-12">
        <div class="card card-body">
            <?php echo $this->session->tempdata('pesan') ?>
            <h5 class="text-center mb-3"> DATA BERITA</h5>
            <div class="row my-3">
                <div class="col">
                    <a href="<?php echo base_url('data_berita/tambah') ?>" class="btn btn-sm btn-primary">
                        input berita
                    </a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="tabel-1">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ID BERITA</th>
                            <th>TANGGAL BERITA</th>
                            <th>JUDUL BERITA</th>
                            <th>ISI BERITA</th>
                            <th class="text-center">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_berita as $data) : ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['id_berita'] ?></td>
                                <td><?php echo $data['tgl_berita'] ?></td>
                                <td><?php echo $data['judul_berita'] ?></td>
                                <td><?php echo $data['isi_berita'] ?></td>
                                <td class="text-center" width="50">
                                    <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-sm btn-danger" href="<?php echo base_url('data_berita/hapus/' . $data['id_berita']) ?>">
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