<div class="row">
    <div class="col-lg-12">
        <?php if ($this->session->hak_akses == 'mahasiswa') { ?>
        <h1 class="page-header"><i class="glyphicon glyphicon-file"></i>Pengajuan Proposal</h1> <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
        <h1 class="page-header"><i class="glyphicon glyphicon-file"></i>Pemilihan Riviewer</h1> <?php } ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php if ($this->session->hak_akses == 'mahasiswa') { ?> 
                Form Pengajuan Proposal 
                <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?> 
                Form Pemilihan Riviwer 
                <?php } ?>
            </div>
            <div class="panel panel-body">
                <?php if ($this->session->hak_akses == 'mahasiswa') { ?>
                <div style="clear:both"></div>
                <form action="Pengajuan/upload" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="form-group">
                                <label for="" style="color: #9f191f"><i class="fa fa-book "></i> Judul Tugas Akhir</label>
                                <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukkan Judul Tugas Akhir">
                            </div>
                            <div class="form-group">
                                <label for="" style="color: #0d6aad"><i class="glyphicon glyphicon-user"></i> Calon Pembimbing
                                </label>
                                <select name="riviewer_1" id="countrycode" class="form-control">
                                    <?php foreach ($dosen as $s) { ?>
                                    <option name="<?= $s->nip ?>" value="<?= $s->nip ?>" id="<?= $s->nip ?>"><?= $s->nama ?></option>
                                    <?php } ?>
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
                            <?php foreach ($data2 as $d) { ?>
                            <div class="form-group">
                                <div class="alert alert-info">
                                    <label for=""><i class="fa fa-file"></i> <?= $d ?></label>
                                    <input type="file" name="<?= $d ?>[]" value="<?= $d ?>">
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col-lg-12">
                            <button class="btn btn-success" type="submit">Ajukan</button>
                        </div>
                    </div>
                </form>
                <!-- mahasiswa -->
                <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
                <div class="form-group">
                    <label for="">Dosen Riviewer 1</label>
                    <select name="riviewer_1" id="" class="form-control">
                        <?php foreach ($dosen as $b) { ?>
                        <option name="<?= $b->nip ?>" value="<?= $b->nip ?>" id="<?= $b->nip ?>"><?= $b->nama ?> </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Dosen Riviewer 1</label>
                    <select name="riviewer_2" id="" class="form-control">
                        <?php foreach ($dosen as $c) { ?>
                        <option name="<?= $c->nip ?>" value="<?= $c->nip ?>" id="<?= $c->nip ?>"><?= $c->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>