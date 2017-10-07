<div class="page-header">
    <h3>Tambah Mahasiswa</h3>
</div>

<form action="<?= $this->url->get('add/add') ?>" class="form-horizontal" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nim" required>NIM:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="name" required>Nama:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="name" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="department" required>Departemen:</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="department" placeholder="Masukkan Departemen">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" id="add" class="btn btn-default">Add</button>
      <a href="<?= $this->url->get('index') ?>" class="btn btn-danger" role="button">Batal</a>
    </div>
  </div>
</form>
