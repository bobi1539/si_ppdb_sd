<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-body">
                <?php echo $this->session->tempdata('pesan') ?>
                <a href="<?php echo base_url('admin/tambah_mdta') ?>" class="btn col-lg-3
                 btn-sm btn-primary mb-3">
                    <i class="fas fa-plus fa-sm"></i> TAMBAH MDTA
                </a>
                <h5 class="text-center mb-3"> DATA MDTA</h5>
                <div class="table-responsive">
                    <table class="table table-bordered" id="table-mdta">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode MDTA</th>
                                <th>Nama NDTA</th>
                                <th>Jumlah Murid</th>
                                <th>Nagari</th>
                                <th>Jorong</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =1;
                            foreach ($data_mdta as $data): ?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $data['kode_mdta']?></td>
                                <td><?php echo $data['nama_mdta']?></td>
                                <td><?php echo $data['jumlah_murid']?></td>
                                <td><?php echo $data['nagari']?></td>
                                <td><?php echo $data['jorong']?></td>

                                <td class="text-center" width="100">
                                    <a href="<?php echo base_url('admin/edit_mdta/'). $data ['kode_mdta']?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Yakin Data dihapus ?')"
                                    href="<?php echo base_url('admin/hapus_mdta/'). $data ['kode_mdta']?>" 
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
</div>