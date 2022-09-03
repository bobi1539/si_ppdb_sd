<?php if ($laporan) : ?>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-lg-12">
                <?php if ($tanggal != '' && $bulan != '' && $tahun != '') : ?>
                    <h4 class="text-center">LAPORAN MDA/TPA/TPGQ</h4>
                    <h4 class="text-center">SE-NAGARI SUNGAI PUA KABUPATEN AGAM PER HARI</h4>
                    <h6 class="text-center">Tanggal : <?php echo $tanggal ?>, Bulan : <?php echo $bulan ?>, Tahun : <?php echo $tahun ?></h6>
                <?php elseif ($bulan != '' && $tahun != '') : ?>
                    <h4 class="text-center">LAPORAN MDA/TPA/TPGQ</h4>
                    <h4 class="text-center">SE-NAGARI SUNGAI PUA KABUPATEN AGAM PER BULAN</h4>
                    <h6 class="text-center">Bulan : <?php echo $bulan ?>, Tahun : <?php echo $tahun ?></h6>
                <?php elseif ($tahun != '') : ?>
                    <h4 class="text-center">LAPORAN MDA/TPA/TPGQ</h4>
                    <h4 class="text-center">SE-NAGARI SUNGAI PUA KABUPATEN AGAM PER TAHUN</h4>
                    <h6 class="text-center">Tahun : <?php echo $tahun ?></h6>
                <?php endif ?>

                <table class="table table-bordered" style="font-size: 12px;">
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama MDTA</th>
                        <th rowspan="2">Nama Guru</th>
                        <th rowspan="2">Tempat/TGL Lahir</th>
                        <th rowspan="2">No Rekening</th>
                        <th rowspan="2">Jumlah Murid</th>
                        <th colspan="2" class="text-center">Alamat</th>
                        <th rowspan="2">Masa Kerja</th>
                        <th rowspan="2">Jenis Bantuan</th>
                        <th rowspan="2">Jumlah Bantuan</th>
                    </tr>
                    <tr>
                        <th class="text-center">Nagari</th>
                        <th class="text-center">Jorong</th>
                    </tr>
                    <?php $no = 1;
                    $total = 0;
                    foreach ($laporan as $data) : ?>
                        <?php $total += $data['jumlah_bantuan'] ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $data['nama_mdta'] ?></td>
                            <td><?php echo $data['nama_guru'] ?></td>
                            <td><?php echo $data['tempat_lahir'] . ' / ' . date('d-m-Y', strtotime($data['tanggal_lahir'])) ?></td>
                            <td><?php echo $data['no_rekening'] ?></td>
                            <td><?php echo $data['jumlah_murid'] ?></td>
                            <td><?php echo $data['nagari'] ?></td>
                            <td><?php echo $data['jorong'] ?></td>
                            <td><?php echo $data['masa_kerja'] ?></td>
                            <td><?php echo $data['jenis_bantuan'] ?></td>
                            <td class="text-right"><?php echo number_format($data['jumlah_bantuan'], 0, ",", ".") ?></td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td colspan="10" class="font-weight-bold text-center">Total</td>
                        <td class="text-right"><?php echo number_format($total, 0, ",", ".") ?></td>
                    </tr>
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
