<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-body">
                <a href="<?php echo base_url('admin/pilih_guru') ?>" class="btn col-lg-3 btn-sm btn-primary mb-3">
                    <i class="fas fa-plus fa-sm"></i> TAMBAH TRANSAKSI
                </a>
                <h5 class="text-center mb-3"> DATA TRANSAKSI</h5>
                <?php echo $this->session->tempdata('pesan') ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-transaksi">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode Transkasi</th>
                                <th>Tanggal Transaksi</th>
                                <th>Bantuan</th>
                                <th>Nama Guru</th>
                                <th>MDTA</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($transaksi as $data) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['kode_transaksi'] ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($data['tanggal_transaksi'])) ?></td>
                                    <td><?php echo $data['jenis_bantuan'] ?></td>
                                    <td><?php echo $data['nama_guru'] ?></td>
                                    <td><?php echo $data['nama_mdta'] ?></td>
                                    <td class="text-center" width="150">
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('admin/detail_transaksi/') . $data['kode_transaksi'] ?>">Detail</a>
                                        <a onclick="return confirm('Yakin data dihapus?')" class="btn btn-danger btn-sm" href="<?php echo base_url('admin/hapus_transaksi/') . $data['kode_transaksi'] ?>">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>