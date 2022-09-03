<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-body">
                <h5 class="text-center mb-3"> DATA TRANSAKSI BANTUAN</h5>
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
                                        <a class="btn btn-primary btn-sm" href="<?php echo base_url('user/detail_transaksi/') . $data['kode_transaksi'] ?>">Detail</a>
                                        
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