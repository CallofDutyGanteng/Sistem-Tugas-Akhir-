{% if pengajuan == 'true' %}
<div class="view">
    <h3><b>Status : </b>{{ data_pengajuan.status}}</h3>
    <h3><b>nim :</b>{{ data_pengajuan.nim }}</h3>
    <h3><b>judul :</b>{{ data_pengajuan.judul }}</h3>
    <h3><b>metode :</b>{{ data_pengajuan.metode }}</h3>
    <h3><b>calon pembimbing 1 :</b>{{ data_pengajuan.calon_pembimbing_1 }}</h3>
    <h3><b>calon pembimbing 2 :</b>{{ data_pengajuan.calon_pembimbing_2 }}</h3>
    {% for s in syarat_review %}
    <div class="col-sm-4 card-large">
        <div class="card large primary">
            <div class="card-image">
                <img src='docs_ta/pengajuan/{{session.nip_nim}}/{{s}}' alt="">
            </div>
        </div>
    </div>
    {% endfor %}
    <div class="btn-group btn-group-m">
        <button type="button" class="btn btn-primary" id="btnEdit">Edit</button>
    </div>
</div>
<div class="update">
    <h3>Edit Pengajuan :</h3>
    {{ form('Pengajuan/update' ,'rule' : 'form' ,'enctype' : 'multipart/form-data') }}
        <div class="col-lg-6">
            <div class="form-group">
                <label for="">Judul :</label>
                <input type="hidden" name="id_pengajuan" value="{{data_pengajuan.id_pengajuan}}">
                <input type="hidden" name="nim" value="{{data_pengajuan.nim}}">
                <input value="{{ data_pengajuan.judul }}" type="text" class="form-control" name="judul" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Metode :</label>
                <input value="{{data_pengajuan.metode}}" type="text" class="form-control" name="metode" placeholder="">
            </div>
            <div class="form-group">
                <label for="">Calon Pembimbing 1 :</label>
                <select name="calon_pembimbing_1" class="form-control">
                    {% for d in dosen %}
                    <option {% if d.nip == data_pengajuan.calon_pembimbing_1 %}{{'selected'}}{% endif %} value="{{ d.nip}}">{{ d.nama}}</option>
                    {% endfor %}
                </select>
            </div>
            <div class="form-group">
                <label for="">Calon Pembimbing 2 : </label>
                <select name="calon_pembimbing_2" class="form-control">
                    {% for d in dosen %}
                    <option {% if d.nip == data_pengajuan.calon_pembimbing_2 %}{{'selected'}}{% endif %} value="{{ d.nip}}">{{ d.nama}}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="card-header" data-background-color="purple">
                    <label for=""><i class="pe-7s-mail-open-file"></i> Laporan Proposal <strong>(Bab 1 - 3)</strong> *</label>
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
        <button type="submit" class="btn btn-success" id="btnUpdate">Update</button>
        <button type="button" class="btn btn-default">Reset</button>
        <button type="button" class="btn btn-danger" id="btnBatal">Batalkan</button>
    </form>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.update').hide();
        $('#btnEdit').click(function() {
            $('.update').show();
            $('#card-header').hide();
            $('.view').hide();
        });
        $('#btnBatal').click(function() {
            $('.update').hide();
            $('#card-header').show();
            $('.view').show();
        });
    })
</script>
{% else %}
<div style="clear:both"></div>
<form action="Pengajuan/pengajuansyarat" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-5">
            <div class="form-group">
                <label for="" style="color: #0d6aad"><i class="pe-7s-paper-plane"></i> NIM</label>
                <input type="text" value='{{session.nip_nim}}' name="nim" id="nim" class="form-control text-primary" readonly="">
            </div>
            <div class="form-group">
                <label for="" style="color: #0d6aad"><i class="pe-7s-paper-plane"></i> Judul Tugas Akhir</label>
                <input type="text" name="judul" id="judul" class="form-control text-primary" placeholder="Masukkan Judul Tugas Akhir">
            </div>
            <div class="form-group">
                <label for="" style="color: #0d6aad"><i class="pe-7s-comment"></i> Metode Yang Dipakai</label>
                <input type="text" name="metode" id="metode" class="form-control text-primary" placeholder="Masukan Metode">
            </div>
            <div class="form-group">
                <label for="" style="color: #0d6aad"><i class="pe-7s-users fa-fw"></i>Calon Pembimbing 1</label>
                <select name="calon_pembimbing_1" id="countrycode" class="form-control">
                    {% for s in dosen %}
                        <option name="{{ s.nip }}1" class="text-primary" value="{{ s.nip }}" onclick="showDetail({{s.nip}})"
                                id="{{ s.nip }}">{{ s.nama }}</option>
                    {% endfor %}
                </select>
            </div>
            <div class="form-group">
                <label for="" style="color: #0d6aad"><i class="pe-7s-users fa-fw"></i> Calon Pembimbing 2</label>
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
