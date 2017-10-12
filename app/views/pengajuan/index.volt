<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                {% if session.hak_akses == "mahasiswa" %}
                    {% if pengajuan == 'true' %}
                    <h1 class="title"><i class="pe-7s-paper-plane"></i>Liat Proposal
                    {% else %}
                    <h1 class="title"><i class="pe-7s-paper-plane"></i>Pengajuan Proposal
                    {% endif %}

                    </h1>
                {% elseif session.hak_akses == "kordinatorTA" %}
                    <h1 class="title"><i class="pe-7s-file"></i>Pemilihan Riviewer</h1> 
                {% endif %}
                </p>
            </div>
            <div class="card-content">
                {% if session.hak_akses == "mahasiswa" %}
                    {% if pengajuan == 'true' %}
                        {{data_pengajuan }}
                        
                    {% else %}
                        <div style="clear:both"></div>
                        <form action="Pengajuan/pengajuansyarat" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-paper-plane"></i> NIM</label>
                                        <input type="text" value='{{session.nip_nim}}' name="nim" id="nim" class="form-control text-primary" readonly="">
                                    </div><div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-paper-plane"></i> Judul Tugas
                                            Akhir</label>
                                        <input type="text" name="judul" id="judul" class="form-control text-primary"
                                               placeholder="Masukkan Judul Tugas Akhir">
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-comment"></i> Metode Yang Dipakai</label>
                                        <input type="text" name="metode" id="metode" class="form-control text-primary" placeholder="Masukan Metode">
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-users fa-fw"></i> Calon
                                            Pembimbing 1
                                        </label>
                                        <select name="calon_pembimbing_1" id="countrycode" class="form-control">
                                            {% for s in dosen %}
                                                <option name="{{ s.nip }}1" class="text-primary" value="{{ s.nip }}" onclick="showDetail({{s.nip}})" 
                                                        id="{{ s.nip }}">{{ s.nama }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-users fa-fw"></i> Calon
                                            Pembimbing 2
                                        </label>
                                        <select name="calon_pembimbing_2" id="countrycode" class="form-control">
                                            {% for s in dosen %}
                                                <option name="{{ s.nip }}2" class="text-primary" value="{{ s.nip }}"
                                                        id="{{ s.nip }}">{{ s.nama }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                    </select>
                                </div>
                                <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="card-header" data-background-color="purple">
                                            <label for=""><i class="pe-7s-mail-open-file"></i> Laporan Proposal <strong>(Bab
                                                    1 - 3)</strong> *</label>
                                            <input type="file" name="file">
                                        </div>
                                    </div>
                                    {% for d in syarat %}
                                        <div class="form-group">
                                            <div class="card-header" data-background-color="purple">
                                                <label for=""><i class="fa fa-file"></i> (Upload File) {{ d }} </label>
                                                <input type="file" name="{{ d }}[]" class="upload" value="{{ d }}">
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Ajukan</button>
                                </div>
                            </div>
                        </form>
                    {% endif %}
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
