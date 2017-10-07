<div class="row">
    <div class="col-md-12">
        <div class="page-header">

        </div>
    </div>
</div>
<?php $this->flashSession->output(); ?>

<!-- Modal Edit Data Pengguna -->
{% for v in data %}
<div class="modal fade" id="modalUbah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="hidden" value="" >
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Mengubah Data</h4>
            </div>

            <div class="modal-body">
                <form action="{{url("dosen/update")}}" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nip_nim">NIP/NIM:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control edit_nip_nim" id="nip_nim" name="nip_nim" value="" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nama">Nama:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control edit_name" id="nama" name="nama" placeholder="Masukkan Nama" value="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="bidang">Hak Akses:</label>
                        <div class="col-sm-8">
                            
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
            <th>NIP / NIM</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Hak Akses</th>
        </tr>
        </thead>
        <tbody>
        <div class="list_pengguna"></div>
        {% for d in data %}
            <tr>
                <td>{{d.nip_nim}}</td>
                <td>{{d.nama}}</td>
                <td><img src="img/{{d.foto}}" alt="" width="120" height="84"></td>
                <td>{{d.hak_akses}}</td>
                <td>
                    <a data-id_pengguna="{{d.id_pengguna}}" data-nip_nim="{{d.nip_nim}}" data-nama="{{d.nama}}" data-foto="{{d.foto}}" data-hak_akses ="{{d.hak_akses}}" class="btn btn-warning" id="editbtn" data-toggle="modal" data-target="#modalUbah">Ubah</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
