<div class="row justify-content-center">
    <div class="col-lg-6">
        <div class="card card-body my-4">
            <h4 class="text-center">Detail Transaksi</h4>
            <hr>
            <table class="table table-hover">
                <tr>
                    <td>No Transaksi</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['kode_transaksi'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td>:</td>
                    <td>
                        <?php echo date('d-m-Y', strtotime($transaksi['tanggal_transaksi'])) ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama Guru</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['nama_guru'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat/Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['tempat_lahir'] . ' / ' . date('d-m-Y', strtotime($transaksi['tanggal_lahir'])) ?>
                    </td>
                </tr>
                <tr>
                    <td>No Rekening</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['no_rekening'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Masa Kerja</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['masa_kerja'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Nama MDTA</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['nama_mdta'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Murid</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['jumlah_murid'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Nagari</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['nagari'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Jorong</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['jorong'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Bantuan</td>
                    <td>:</td>
                    <td>
                        <?php echo $transaksi['jenis_bantuan'] ?>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Bantuan</td>
                    <td>:</td>
                    <td>
                        Rp. <?php echo number_format($transaksi['jumlah_bantuan'], 0, ',', '.') ?>
                    </td>
                </tr>
            </table>
            <hr>
            <a href="<?php echo base_url('admin/data_transaksi') ?>" class="col-lg-3 mt-3 btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>