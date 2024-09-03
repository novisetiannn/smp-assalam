<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tambah Data Pegawai</h1>

<!-- DataTales Example -->
<!-- <div class="card shadow mb-4"> -->
<form class="user" action="<?= base_url()?>data_pegawai/proses_tambah" method="POST">

   <div class="form-group">
       <label for="">Nama Pegawai</label>
       <input type="text" class="form-control form-control-user" name="nama_pegawai" placeholder="Nama Pegawai" required>
   </div>
   <div class="form-group">
       <label for="">Tempat Lahir</label>
       <input type="text" class="form-control form-control-user" name="tempat_lahir" placeholder="Tempat Lahir" required>
   </div>
   <div class="form-group">
       <label for="">Tanggal Lahir</label>
       <input type="date" class="form-control form-control-user" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
   </div>
   <div class="form-group">
       <label for="">Jabatan</label>
       <input type="text" class="form-control form-control-user" name="jabatan" placeholder="Jabatan" required>
   </div>
   <div class="form-group">
       <label for="">Pendidikan Terakhir</label>
       <input type="text" class="form-control form-control-user" name="pendidikan_terakhir" placeholder="Pendidikan Terakhir" required>
   </div>
   <button type="submit" class="btn btn-primary ">
       Tambah
    </button>
   <hr>

</form>
<!-- </div> -->

</div>
<!-- /.container-fluid -->