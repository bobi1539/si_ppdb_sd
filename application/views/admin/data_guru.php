
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-body">
                <?php echo $this->session->tempdata('pesan') ?>
                <h5 class="text-center mb-3"> DATA GURU</h5>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-guru">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA MDTA</th>
                                <th>NAMA GURU</th>
                                <th>TEMPAT LAHIR</th>
                                <th>TANGGAL LAHIR</th>
                                <th>MASA KERJA</th>
                                <th class="text-center" width="100">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =1;
                            foreach ($data_guru as $data): ?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $data['nama_mdta']?></td>
                                <td><?php echo $data['nama_guru']?></td>
                                <td><?php echo $data['tempat_lahir']?></td>
                                <td><?php echo $data['tanggal_lahir']?></td>
                                <td><?php echo $data['masa_kerja']?></td>

                                <td class="text-center">
                                    <a href="<?php echo base_url('admin/detail_guru/') . $data['kode_guru'] ?>" class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></a>
                                    <a onclick="return confirm('Yakin Data dihapus ?')"
                                    href="<?php echo base_url('admin/hapus_guru/'). $data ['kode_guru']?>" 
                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach ;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>