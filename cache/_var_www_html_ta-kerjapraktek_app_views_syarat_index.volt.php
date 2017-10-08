<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Kumpulan Syarat-Syarat Tugas Akhir Mahasiswa</h2>
            </div>
<<<<<<< HEAD
            <!-- /.panel-heading -->
            <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#proposal" data-toggle="tab">Syarat Proposal</a>
                    </li>
                    <li><a href="#hasil" data-toggle="tab">Syarat Hasil</a>
                    </li>
                    <li><a href="#sidang" data-toggle="tab">Syarat Sidang</a>
                    </li>
                    <li><a href="#skl" data-toggle="tab">Surat Keterangan Lulus</a>
                    </li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="proposal">
                        <br/>
                        
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">NO</th>
                                <th>Nama</th>
                                <th colspan="3">File</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td width="5%">1</td>
                                    <td>Ahmad Fauzi Rahman</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                </tr>
                            </tbody>
                        </table>
=======
            <div class="panel panel-body">
                <?php if ($this->session->hak_akses == 'mahasiswa') { ?>
                <div style="clear:both"></div>
                <form action="pengajuan/upload" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="">Kode Pengajuan</label>

                                <input type="text"  value="Kd-Pengajuan-000001" name="" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="" style="color: #9f191f"><i class="fa fa-book "></i> Judul Tugas Akhir</label>
                                <input type="text" name="judul" id="judul"  class="form-control" placeholder="Masukkan Judul Tugas Akhir">
                            </div>
    <?php var_dump($no); ?>
                                <div class="form-group">
                                    <label for="" style="color: #0d6aad"><i class="glyphicon glyphicon-user"></i> Calon
                                        Pembimbing</label>
                                    <select name="riviewer_1" id="countrycode" class="form-control">
                                        <?php foreach ($dosen as $s) { ?>
                                            <option name="<?= $s->nip ?>"  value="<?= $s->nip ?>"
                                                    id="<?= $s->nip ?>"><?= $s->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </select>
                                
                                    
                                    
                                    
                                    
                                    
                                    
                                
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="alert alert-success">
                                    <label for=""><i class="glyphicon glyphicon-file"></i> Laporan Proposal <strong>(Bab 1 - 3)</strong> *</label>
                                    <input type="file"  name="file[]">
                                </div>
                            </div>

                            <?php foreach ($data2 as $d) { ?>
                                <div class="form-group">
                                    <div class="alert alert-info">
                                        <label for=""><i class="fa fa-file"></i> <?= $d ?></label>
                                        <input type="file" name="<?= $d ?>[]" value="<?= $d ?>" multiple>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-12">
                        <div class="form-group">
                            <input type="submit" class="btn btn-default col-lg-12" value="Ajukan Proposal ">
                        </div>
                        </div>
>>>>>>> 5765bdc6afb70260347f69923a5bf1db00aa3fb1
                    </div>
                    <br/>
                    <div class="tab-pane fade in" id="hasil">
                        
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">NO</th>
                                <th>Nama</th>
                                <th colspan="3">File</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="5%">1</td>
                                <td>Ahmad Fauzi Rahman</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade in" id="sidang">
                        
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="5%">NO</th>
                                <th>Nama</th>
                                <th colspan="3">File</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="5%">1</td>
                                <td>Ahmad Fauzi Rahman</td>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade in" id="skl">
                        <?= $this->tag->image(['img/l_uin.png', 'width' => '100%']) ?>
                    </div>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
</div>