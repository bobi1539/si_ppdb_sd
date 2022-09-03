<?php if ($laporan) : ?>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center">LAPORAN GURU MDTA SUNGAI PUA KABUPATEN AGAM</h4>
                <h4 class="text-center">TAHUN : <?php echo date('Y') ?></h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Guru</th>
                            <th>Tempat/Tanggal Lahir</th>
                            <th>No Rekening</th>
                            <th>Masa Kerja</th>
                            <th>Nama MDTA</th>
                            <th>Jumlah Murid</th>
                            <th>Nagari</th>
                            <th>Jorong</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($laporan as $data) : ?>
                            <tr>
                                <td scope="row"><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_guru'] ?></td>
                                <td><?php echo $data['tempat_lahir'] . ' / ' . date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                                <td><?php echo $data['no_rekening'] ?></td>
                                <td><?php echo $data['masa_kerja'] ?></td>
                                <td><?php echo $data['nama_mdta'] ?></td>
                                <td><?php echo $data['jumlah_murid'] ?></td>
                                <td><?php echo $data['nagari'] ?></td>
                                <td><?php echo $data['jorong'] ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
<?php else : ?>
    <div class="row my-5 justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center font-weight-bold">Data tidak ditemukan</h3>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>