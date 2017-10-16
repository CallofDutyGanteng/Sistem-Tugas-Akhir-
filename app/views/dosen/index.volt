<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h1 class="title"><i class="fa fa-group fa-fw"></i>Dosen Jurusan Teknik Informatika</h1>
            </div>
        </div>
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li><a href="guide"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                <li><a href="dosen"><i class="fa fa-user-secret fa-fw"></i> Data Dosen</a></li>
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Tambah Data Dosen</h4>
            </div>
            <div class="modal-body">
                <form action="{{ url("dosen/add") }}" class="form-horizontal" method="POST">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nip" required>NIP:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nip" id="nip" maxlength="20"
                                   placeholder="Masukkan NIP">
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
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
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
<div class="panel panel-default">
    <div class="panel panel-heading">
        <a href="" data-toggle="modal" data-target="#modalTambah"><span
                    class="btn btn-primary fa fa-plus-circle btn-lg"> Tambah Data Dosen</span></a>
    </div>
    <div class="panel panel-body">
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
                    <tr id='data{{ d.nip }}'>
                        <td>{{ d.nip }}</td>
                        <td>{{ d.nama }}</td>
                        <td>{{ d.bidang }}</td>
                        <td>
                            <a href="#" id="btnedit{{ d.nip }}" class="btnedit{{d.nip}} btn btn-primary">Edit</a>
                            <script type="text/javascript">
                                $(document).ready(function () {
                                    $('#formedit{{ d.nip }}').hide();
                                    $('#btnedit{{ d.nip }}').click(function () {
                                        $('#formedit{{ d.nip }}').fadeToggle();
                                        $('a.btnedit{{ d.nip }}').attr('class','a#btnedited{{d.nip}} btn btn-primary');
                                    });

                                    
                                })
                            </script>
                            <a href="" data-href="dosen/delete/{{ d.nip }}" class="btn btn-danger" data-toggle="modal"
                               data-target="#modalHapus">Hapus</a>
                        </td>
                    </tr>
                    {{ form('dosen/update' ,'rule':'form') }}
                    <tr style="background-color:#337ab7" class="formedit" id='formedit{{ d.nip }}'>
                        <td colspan="4">
                            <input type="text" name="nip" value="{{ d.nip }}" readonly>
                            <input type="text" name="nama" value="{{ d.nama }}">
                            <input type="text" name="bidang" value="{{ d.bidang }}">
                            <button type="submit" class="btn btn-success">simpan</button>
                        </td>

                    </tr>
                    </form>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
