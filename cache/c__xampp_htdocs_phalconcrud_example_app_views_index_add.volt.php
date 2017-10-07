<div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 class="modal-title" id="myModalLabel">Tambah Data Mahasiswa</h4>
</div>
<div class="modal-body">
<form action="<?= $this->url->get('index/add') ?>" class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nim" required>NIM:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name" required>Nama:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department" required>Departemen:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="department" placeholder="Masukkan Departemen">
    </div>
  </div>
</form>
</div>
<div class="modal-footer">
  <button type="submit" id="add" class="btn btn-success">Add</button>
  <a data-dismiss="modal" class="btn btn-danger" role="button">Batal</a>
</div>
