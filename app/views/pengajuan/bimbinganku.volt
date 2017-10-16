<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple" id="card-header">
                <h1><i class="pe-7s-users"></i> Bimbingan Ku</h1>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-info" id="btnPembimbing1">
                        Pembimbing 1
                    </button>
                    <button type="button" class="btn btn-default" id="btnPembimbing2">
                        Pembimbing 2
                    </button>
                </div>
            </div>
            <div class="card-content">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover ">
                            <thead class="text-primary">
                                <tr>
                                    <th>#</th>
                                    <th>Nim</th>
                                    <th>Judul</th>
                                    <th width="15%">Metode</th>
                                    <th>Doc</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Pilih Review</th>
                                </tr>
                            </thead>
                            <script type="text/javascript">
                            $('#viewPembimbing1').show();
                            $('#viewPembimbing2').hide();
                            $(document).ready(function () {
                                $('#btnPembimbing1').click(function() {
                                    $('#viewPembimbing1').show();
                                    $('#viewPembimbing2').hide();
                                    $('#btnPembimbing1').attr('class','btn btn-info');
                                    $('#btnPembimbing2').attr('class','btn btn-default');
                                });
                                $('#btnPembimbing2').click(function() {
                                    $('#viewPembimbing2').show();
                                    $('#viewPembimbing1').hide();
                                    $('#btnPembimbing1').attr('class','btn btn-default');
                                    $('#btnPembimbing2').attr('class','btn btn-info');
                                });
                            });
                            </script>
                            {% set no = '#' %}
                            {% for data2 in pengajuan2 %}
                                {% if data2.status == 'proses_review' and data2.calon_pembimbing_1 == session.nip_nim %}
                                    <tbody id="viewPembimbing1">
                                        <tr>
                                            <td>{{ no }}</td>
                                            <td>{{ data2.nim }}</td>
                                            <td>{{ data2.judul }}</td>
                                            <td>{{ data2.metode }}</td>
                                            <td><a href="docs_ta/pengajuan/{{ data2.nim }}/{{ data2.doc_proposal }}" target="blank">Proposal Tugas Akhir</a>
                                                <td>{{ data2.tanggal_upload }}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm btn-group-vertical">
                                                        <button type="button" class="btn btn-primary" id="btndetail{{data2.nim}}">Detail</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <tr id="detail{{data2.nim}}">
                                            <td colspan="7">
                                                <h2>detail bimbingan....</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <script type="text/javascript">
                                        $('tr#detail{{data2.nim}}').hide();
                                        $(document).ready(function() {
                                            $('#btndetail{{data2.nim}}').click(function() {
                                                $('#detail{{data2.nim}}').fadeToggle();
                                            });
                                        });
                                    </script>
                                {% elseif data2.status == 'proses_review' and data2.calon_pembimbing_2 == session.nip_nim %}
                                    <tbody id="viewPembimbing2">
                                        <tr>
                                            <td>{{ no }}</td>
                                            <td>{{ data2.nim }}</td>
                                            <td>{{ data2.judul }}</td>
                                            <td>{{ data2.metode }}</td>
                                            <td><a href="docs_ta/pengajuan/{{ data2.nim }}/{{ data2.doc_proposal }}" target="blank">Proposal Tugas Akhir</a>
                                                <td>{{ data2.tanggal_upload }}</td>
                                                <td>
                                                    <div class="btn-group btn-group-sm btn-group-vertical">
                                                        <button type="button" class="btn btn-primary" id="btndetail{{data2.nim}}2">Detail</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <tr id="detail{{data2.nim}}2">
                                            <td colspan="7">
                                                <h2>detail bimbingan....</h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <script type="text/javascript">
                                        $('tr#detail{{data2.nim}}2').hide();
                                        $(document).ready(function() {
                                            $('#btndetail{{data2.nim}}2').click(function() {
                                                $('#detail{{data2.nim}}2').fadeToggle();
                                            });
                                        });
                                    </script>
                                {% else %}
                                    {#<div class="alert alert-warning"><span>tidak ada Mahasiswa Bimbingan</span></div>#}
                                {% endif %}

                            {% endfor %}
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nim</th>
                                    <th>Judul</th>
                                    <th>Metode</th>
                                    <th>Doc</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Pilih Riviewer</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
