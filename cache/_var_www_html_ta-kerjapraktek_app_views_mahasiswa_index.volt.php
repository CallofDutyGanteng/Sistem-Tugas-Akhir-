<div class="row">
  <div class="col-md-12">
      <h1 class="page-header"><i class="fa fa-group fa-fw"></i> Mahasiswa Jurusan Teknik Informatika</h1>
    <div class="col-lg-12">
      <ol class="breadcrumb">
        <li><a href="guide"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
        <li><a href="mahasiswa"><i class="fa fa-user-secret fa-fw"></i> Data Mahasiswa</a></li>
      </ol>
    </div>

  </div>
</div>
<?php $this->flashSession->output(); ?>

<!-- Modal Form Tambah Data Mahasiswa -->

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Mahasiswa</h4>
      </div>
      <div class="modal-body">
      <form action="<?= $this->url->get('mahasiswa/add') ?>" class="form-horizontal" method="POST">
        <div class="form-group">
          <label class="control-label col-sm-2" for="nim" required>NIM:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="nim" maxlength="11" placeholder="Masukkan NIM">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="name" required>Nama:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="department" required>Judul :</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" name="department" placeholder="Judul Tugas Akhir">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" id="add" class="btn btn-success">Add</button>
            <a data-dismiss="modal" class="btn btn-danger" role="button">Batal</a>
          </div>
        </div>
      </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete Data Mahasiswa -->

<div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Menghapus Data</h4>
      </div>
      <div class="modal-body">
        Yakin untuk menghapus data?
      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>-->
        <a name="delete-data" class="btn btn-danger btn-ok" role="button">Hapus</a></td>
        <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Edit Data Mahasiswa -->

<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Mengubah Data</h4>
      </div>
      <div class="modal-body">
        <form action="<?= $this->url->get('mahasiswa/update') ?>" class="form-horizontal" method="POST">
          <div class="form-group">
            <label class="control-label col-sm-2" for="nim">NIM:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control edit_nim" id="nim" name="nim" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Nama:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control edit_name" id="name" name="name" placeholder="Masukkan Nama" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="department">Judul:</label>
            <div class="col-sm-8">
              <input type="text" class="form-control edit_department" id="department" name="department" placeholder="Masukkan Judul Tugas Akhir" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button id="update" class="btn btn-primary" type="submit">Simpan</button></td>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<!-- List Data Mahasiswa -->
<div class="panel panel-default">
  <div class="panel panel-heading">
    <a href="" data-toggle="modal" data-target="#modalTambah"><span class="btn btn-primary fa fa-plus-circle btn-lg"> Tambah Data Mahasiswa</span></a>
  </div>
<div class="panel-body">
<div class="table-responsive">
  <table class="table table-hover">
    <thead>
      <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Judul Tugas Akhir</th>
        <th>Option</th>

      </tr>
    </thead>
    <tbody>
      <div class="list_mahasiswa"></div>
      <?php foreach ($data as $d) { ?>

      <tr>

        <td><?= $d->nim ?></td>
        <td><?= $d->name ?></td>
        <td><?= $d->department ?></td>
        <td>
          <!--<a href="index/edit/<?= $d->nim ?>" class="btn btn-warning" role="button">Ubah</a>-->
          <a data-nim="<?= $d->nim ?>" data-nama="<?= $d->name ?>" data-depart="<?= $d->department ?>" class="btn btn-warning" id="editbtn" data-toggle="modal" data-target="#modalUbah">Ubah</a>
          <a href="" data-href="mahasiswa/delete/<?= $d->nim ?>" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</a>
        </td>
      </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php echo count($data)  ?>
  </div>
</div>
</div>