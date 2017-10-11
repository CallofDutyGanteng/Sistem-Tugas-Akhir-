<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <div class="card">
                <div class="card-header" data-background-color="purple">
                    <h3 class="title"> Data Pengguna Sistem Informasi</h3>
                </div>
                <div class="card-content table-responsive">
                    <table class="table">
                        <thead class="text-primary">
                        <th>NIP / NIM</th>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Hak Akses</th>
                        </thead>
                        <tbody>
                        <div class="list_pengguna"></div>
                        {% for d in data %}
                            <tr>
                                <td>{{ d.nip_nim }}</td>
                                <td>{{ d.nama }}</td>
                                {#<td><img src="img/{{ d.foto }}" alt="" width="120px" height="84"></td>#}
                                <td>{{ d.hak_akses }}</td>
                                <td>
                                    <a id="edit" class="btn btn-primary" data-toggle="modal"
                                       data-target="#myModal{{ d.id_pengguna }}">Edit</a>
                                </td>
                                </td>
                            </tr>
                            <div class="modal fade" id="myModal{{ d.id_pengguna }}" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        {{ form('pengguna/edit/','role':'form') }}
                                        <div class="modal-header">
                                            <div class="card">
                                                <div class="card-header" data-background-color="purple">
                                                    <button type="button" class="close" data-dismiss="modal">&times;
                                                    </button>
                                                    <h4 class="modal-title">Edit Data</h4>
                                                </div>
                                                <div class="card-content">
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="panel panel-body">
                                                                    <input type="hidden" name="id"
                                                                           value="{{ d.id_pengguna }}">
                                                                    <div class="form-group">
                                                                        <label for="">NIP / NIM</label>
                                                                        <input type="text text-primary" name="nip_nim"
                                                                               value="{{ d.nip_nim }}"
                                                                               class="form-control" readonly="">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Nama :</label>
                                                                        <input type="text text-primary" name="nama"
                                                                               value="{{ d.nama }}"
                                                                               class="form-control">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="">Foto :</label>
                                                                        <input type="text text-primary" name="foto"
                                                                               class="form-control"
                                                                               value="{{ d.foto }}">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="">Hak Akses</label>
                                                                        <select name="hak_akses" id="hak_akses" class="form-control">
                                                                            <option {% if d.hak_akses == 'administrator' %}{{ 'selected' }}
                                                                                    value="administrator">Administrator
                                                                            </option>
                                                                            <option {% elseif d.hak_akses == 'dosen' %}{{ 'selected' }}
                                                                                    value="dosen">Dosen
                                                                            </option>
                                                                            <option {% elseif d.hak_akses == 'mahasiswa' %}{{ 'selected' }}
                                                                                    value="mahasiswa">Mahasiswa
                                                                            </option>
                                                                            <option {% elseif d.hak_akses == 'kordinatorTA' %}{{ 'selected' }}{% endif %}
                                                                                    value="kordinatorTA">Kordinator TA
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-info">Edit</button>
                                                            <button type="button" class="btn btn-default"
                                                                    data-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<?php $this->flashSession->output(); ?>



