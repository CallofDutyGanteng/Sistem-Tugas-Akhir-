<div class="page-header">
    <h3>Edit Data Mahasiswa</h3>
</div>

<form action="../update" class="form-horizontal" method="POST">
 <div class="form-group">
   <label class="control-label col-sm-2" for="nim">NIM:</label>
   <div class="col-sm-8">
     <input type="text" class="form-control" name="nim" value="{{nim}}" readonly>
   </div>
 </div>
 <div class="form-group">
   <label class="control-label col-sm-2" for="name">Nama:</label>
   <div class="col-sm-8">
     <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" value="{{name}}" required>
   </div>
 </div>
 <div class="form-group">
   <label class="control-label col-sm-2" for="department">Depatemen:</label>
   <div class="col-sm-8">
     <input type="text" class="form-control" name="department" placeholder="Masukkan Departemen" value="{{department}}" required>
   </div>
 </div>
 <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <button type="submit" class="btn btn-default">Simpan</button>
     <a href="{{url("")}}" class="btn btn-danger" role="button">Batal</a></td>
   </div>
 </div>
</form>
