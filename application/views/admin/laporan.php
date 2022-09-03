<div class="row my-4">
    <div class="col-lg-6">
        <div class="card card-body">
            <h4 class="text-center">Lihat Laporan Transaksi Bantuan</h4>
            <form action="<?php echo base_url('admin/laporan_transaksi') ?>" method="POST" target="_blank">
                <div class="form-group">
                    <label for="kode_bantuan">Jenis Bantuan</label>
                    <select name="kode_bantuan" class="form-control" id="kode_bantuan">
                        <option value="semua">Lihat Semua</option>

                        <?php foreach ($bantuan as $data) : ?>
                            <option value="<?php echo $data['kode_bantuan'] ?>"><?php echo $data['jenis_bantuan'] ?></option>
                        <?php endforeach ?>

                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="text" class="form-control" id="tanggal" name="tanggal">
                </div>
                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input type="text" class="form-control" id="bulan" name="bulan">
                </div>
                <div class="form-group">
                    <label for="tahun">tahun</label>
                    <select name="tahun" id="tahun" class="form-control">
                        <?php for ($tahun = date('Y'); $tahun > 2010; $tahun--) : ?>
                            <option value="<?php echo $tahun ?>"><?php echo $tahun ?></option>
                        <?php endfor ?>
                    </select>
                </div>

                <button class="btn btn-danger " type="submit">Lihat</button>
            </form>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card card-body">
            <h4 class="text-center">Lihat Laporan Guru MDTA</h4>
            <form action="<?php echo base_url('admin/laporan_guru_mdta') ?>" method="POST" target="_blank">
                <div class="form-group">
                    <label for="kode_mdta">MDTA</label>
                    <select name="kode_mdta" class="form-control" id="kode_mdta">
                        <option value="semua">Lihat Semua</option>

                        <?php foreach ($data_mdta as $data) : ?>
                            <option value="<?php echo $data['kode_mdta'] ?>"><?php echo $data['nama_mdta'] ?></option>
                        <?php endforeach ?>

                    </select>
                </div>

                <button class="btn btn-danger " type="submit">Lihat</button>
            </form>
        </div>
    </div>
</div>