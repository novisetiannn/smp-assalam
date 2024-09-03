<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <a href="<?= base_url()?>data_pegawai/tambah_data" title="Ubah" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-plus"></i>
                                        </span>
                                        
                                    </a>
    </div>
    <div class="card-body">
        
      <?= $this->session->flashdata('pesan')?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Nama Pegawai</th>
                        <th>Tempat Lahir Pegawai</th>
                        <th>Tanggal Lahir Pegawai</th>
                        <th>Jabatan Pegawai</th>
                        <th>Pendidikan Terakhir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
               
                <tbody>
                    <?php
                    $no= 1;
                    foreach($data as $d){?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $d['nama_pegawai']?></td>
                        <td><?= $d['tempat_lahir']?></td>
                        <td><?= $d['tanggal_lahir']?></td>
                        <td><?= $d['jabatan']?></td>
                        <td><?= $d['pendidikan_terakhir']?></td>
                        <td>
                            <a href="#" title="Hapus" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>  
                                    </a>
                                    <a href="#" title="Ubah" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>  
                                    </a>
                        </td>
                    </tr>
                    <?php }?>
                  
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->