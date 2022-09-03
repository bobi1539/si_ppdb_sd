<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="card card-body">
                <?php echo $this->session->tempdata('pesan') ?>
                <a href="<?php echo base_url('admin/tambah_bantuan') ?>" class="btn col-lg-3 btn-sm btn-primary mb-3" >
                    <i class="fas fa-plus fa-sm"></i> TAMBAH BANTUAN
                </a>
                <h5 class="text-center mb-3"> DATA BANTUAN</h5>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabel-bantuan">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Kode Bantuan</th>
                                <th>Jenis Bantuan</th>
                                <th>Jumlah Bantuan</th>
                                <th class="text-center">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no =1;
                            foreach ($data_bantuan as $data): ?>
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $data['kode_bantuan']?></td>
                                <td><?php echo $data['jenis_bantuan']?></td>
                                <td><?php echo number_format($data['jumlah_bantuan'], 0, ',', '.') ?></td>
                            
                                <td class="text-center" width="100">
                                    <a href="<?php echo base_url('admin/edit_bantuan/') . $data['kode_bantuan'] ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i></a>
                                    <a onclick="return confirm('Yakin Data dihapus ?')"
                                    href="<?php echo base_url('admin/hapus_bantuan/'). $data['kode_bantuan']?>" 
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


