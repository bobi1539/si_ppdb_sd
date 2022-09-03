<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="h2 text-center">Tambah Transaksi Bantuan</div>
				<form action="<?php echo base_url('admin/tambah_transaksi_aksi') ?>" method="POST">
					<div class="row">
						<div class="col-lg-6">
							<input type="hidden" name="kode_guru" value="<?php echo $data_guru['kode_guru'] ?>" readonly>
							<div class="form-group">
								<label for="nama_guru">Nama Guru</label>
								<input type="text" class="form-control" id="nama_guru" value="<?php echo $data_guru['nama_guru'] ?>" name="nama_guru" readonly>
							</div>
							<div class="form-group">
								<label for="tempat_lahir">Tempat Lahir</label>
								<input type="text" class="form-control" id="tempat_lahir" value="<?php echo $data_guru['tempat_lahir'] ?>" name="tempat_lahir" readonly>
							</div>
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir</label>
								<input type="date" class="form-control" id="tanggal_lahir" value="<?php echo $data_guru['tanggal_lahir'] ?>" name="tanggal_lahir" readonly>
							</div>
							<div class="form-group">
								<label for="no_rekening">No Rekening</label>
								<input type="text" class="form-control" id="no_rekening" value="<?php echo $data_guru['no_rekening'] ?>" name="no_rekening" readonly>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="masa_kerja">Masa Kerja</label>
								<input type="text" class="form-control" id="masa_kerja" value="<?php echo $data_guru['masa_kerja'] ?>" name="masa_kerja" readonly>
							</div>
							<div class="form-group">
								<label for="kode_bantuan">Bantuan</label>
								<select name="kode_bantuan" class="form-control" id="kode_bantuan">
									<option value="pilih">--Pilih--</option>

									<?php foreach ($data_bantuan as $data) : ?>
										<option value="<?php echo $data['kode_bantuan'] ?>"><?php echo $data['jenis_bantuan'] ?></option>
									<?php endforeach ?>

								</select>
							</div>
							<div class="form-group">
								<label for="kode_transaksi">Kode Transaksi</label>
								<input type="text" name="kode_transaksi" class="form-control" id="kode_transaksi" required>
							</div>
							<div class="form-group">
								<label for="tanggal_transaksi">Tanggal Transaksi</label>
								<input type="date" name="tanggal_transaksi" class="form-control" id="tanggal_transaksi" required>
							</div>
						</div>
					</div>
					<div class="row mt-2">
						<div class="col">
							<a href="<?php echo base_url('admin/data_transaksi') ?>" class="btn btn-secondary">Batal</a>
							<button type="submit" class="btn float-right btn-danger">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>