<div class="row my-4 justify-content-center">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h2>Detail Data Guru</h2>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <tr>
                        <td>Kode Guru</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['kode_guru'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama MDTA</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['nama_mdta'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama Guru</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['nama_guru'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['tempat_lahir'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['tanggal_lahir'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>No Rekening</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['no_rekening'] ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Masa Kerja</td>
                        <td>:</td>
                        <td>
                            <?php echo $data_guru['masa_kerja'] ?>
                        </td>
                    </tr>
                </table>
                <a href="<?php echo base_url('admin/data_guru') ?>" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>