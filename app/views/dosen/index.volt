<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <a href="" data-toggle="modal" data-target="#modalTambah"><span class="btn btn-primary"> Tambah Data Dosen</span></a>
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
                <h4 class="modal-title" id="myModalLabel">Tambah Data Dosen</h4>
            </div>
            <div class="modal-body">
                <form action="{{url("dosen/add")}}" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nip" required>NIP:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nip" id="nip" maxlength="20" placeholder="Masukkan NIP">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nama" required>Nama:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bidang" required>Bidang Keahlian :</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="bidang" placeholder="Bidang Keahlian">
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
{% for v in data %}
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" value="{{ v.nip }}" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mengubah Data</h4>
            </div>

            <div class="modal-body">
                <form action="{{url("dosen/update")}}" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nip">NIP:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control edit_nip" id="nip" name="nip" value="{{ v.nip }}" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nama">Nama:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control edit_name" id="nama" name="nama" placeholder="Masukkan Nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bidang">Bidang Keahlian:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control edit_bidang" id="bidang" value="{{ v.bidang }}" name="bidang" placeholder="Masukkan Bidang Keahlian" required>
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
{% endfor %}
<!-- List Data Mahasiswa -->

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Bidang Keahlian</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
        <div class="list_mahasiswa"></div>
        {% for d in data %}
            <tr>
                <td>{{d.nip}}</td>
                <td>{{d.nama}}</td>
                <td>{{d.bidang}}</td>
                <td>
                    <!--<a href="index/edit/{{d.nip}}" class="btn btn-warning" role="button">Ubah</a>-->
                    <a data-nip="{{d.nip}}" data-nama="{{d.nama}}" data-bidang="{{d.bidang}}" class="btn btn-warning" id="editbtn" data-toggle="modal" data-target="#modalUbah">Ubah</a>
                    <a href="" data-href="dosen/delete/{{d.nip}}" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus">Hapus</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
