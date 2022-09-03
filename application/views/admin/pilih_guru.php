<div class="row my-4">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Silahkan pilih Guru</h3>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-guru">
                        <thead>
                            <tr>
                                <th width="10">No</th>
                                <th>Kode Guru</th>
                                <th>Nama Guru</th>
                                <th>Tempat/Tgl Lahir</th>
                                <th>No Rekening</th>
                                <th class="text-center">Masa Kerja</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data_guru as $data) : ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['kode_guru'] ?></td>
                                    <td><?php echo $data['nama_guru'] ?></td>
                                    <td><?php echo $data['tempat_lahir'] . ', ' . date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                                    <td><?php echo $data['no_rekening'] ?></td>
                                    <td class="text-center"><?php echo $data['masa_kerja'] ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url('admin/tambah_transaksi/') . $data['kode_guru'] ?>" class="btn btn-danger btn-sm">Pilih</a>
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