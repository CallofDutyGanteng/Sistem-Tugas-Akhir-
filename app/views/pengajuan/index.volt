<div class="row">
    <div class="col-lg-12">
        {% if session.hak_akses == "mahasiswa" %}
        <h1 class="page-header"><i class="glyphicon glyphicon-file"></i>Pengajuan Proposal</h1> {% elseif session.hak_akses == "kordinatorTA" %}
        <h1 class="page-header"><i class="glyphicon glyphicon-file"></i>Pemilihan Riviewer</h1> {% endif %}
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                {% if session.hak_akses == "mahasiswa" %} Form Pengajuan Proposal {% elseif session.hak_akses == "kordinatorTA" %} Form Pemilihan Riviwer {% endif %}
            </div>
            <div class="panel panel-body">
                <div>
                <?php $this->flashSession->output() ?>
                </div>
                {% if session.hak_akses == "mahasiswa" %}
                <div style="clear:both"></div>
                <form action="pengajuan/pengajuansyarat" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="" style="color: #9f191f"><i class="fa fa-book "></i> Judul Tugas Akhir</label>
                                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Tugas Akhir">
                            </div>
                            <div class="form-group">
                                <label for="" style="color: #0d6aad"><i class="glyphicon glyphicon-user"></i> Calon Pembimbing
                                </label>
                                <select name="calon_pembimbing" id="countrycode" class="form-control">
                                    {% for s in dosen %}
                                    <option value="{{ s.nip }}" id="{{ s.nip }}">{{ s.nama }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            </select>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="alert alert-success">
                                    <label for=""><i class="glyphicon glyphicon-file"></i> Laporan Proposal <strong>(Bab 1 - 3)</strong> *</label>
                                    <input type="file" name="file">
                                </div>
                            </div>
                            {% for d in data %}
                            <div class="form-group">
                                <div class="alert alert-info">
                                    <label for=""><i class="fa fa-file"></i> {{ d }}</label>
                                    <input type="file" name="{{ d }}[]" value="{{ d }}">
                                </div>
                            </div>
                            {% endfor %}
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-success" type="submit">Ajukan</button>
                        </div>
                    </div>
                </form>
                <!-- mahasiswa -->
                {% elseif session.hak_akses == "kordinatorTA" %}
                <div class="form-group">
                    <label for="">Dosen Riviewer 1</label>
                    <select name="riviewer_1" id="" class="form-control">
                        {% for b in dosen %}
                        <option name="{{ b.nip }}" value="{{ b.nip }}" id="{{ b.nip }}">{{ b.nama }} </option>
                        {% endfor %}
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Dosen Riviewer 1</label>
                    <select name="riviewer_2" id="" class="form-control">
                        {% for c in dosen %}
                        <option name="{{ c.nip }}" value="{{ c.nip }}" id="{{ c.nip }}">{{ c.nama }}</option>
                        {% endfor %}
                    </select>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>