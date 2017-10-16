<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <?php if ($this->session->hak_akses == 'mahasiswa') { ?>
                    <?php if ($pengajuan == 'true') { ?>
                        <h1 class="title"><i class="pe-7s-paper-plane"></i>Liat Proposal</h1>
                    <?php } else { ?>
                        <h1 class="title"><i class="pe-7s-paper-plane"></i>Pengajuan Proposal
                    <?php } ?>

                    </h1>
                <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
                    <h1 class="title"><i class="pe-7s-users"></i> Pemilihan Reviewer</h1>
                <?php } ?>
                </p>
            </div>
            <div class="card-content">
                <?php if ($this->session->hak_akses == 'mahasiswa') { ?>
                    <?php if ($pengajuan == 'true') { ?>
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <button class="btn btn-warning btn-lg col-lg-12">Update Pengajuan</button>
                                </div>
                            </div>
                        </form>
                    <?php } else { ?>
                        <div style="clear:both"></div>
                        <form action="Pengajuan/pengajuansyarat" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-paper-plane"></i>
                                            NIM</label>
                                        <input type="text" value='<?= $this->session->nip_nim ?>' name="nim" id="nim"
                                               class="form-control text-primary" readonly="">
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-paper-plane"></i> Judul
                                            Tugas
                                            Akhir</label>
                                        <input type="text" name="judul" id="judul" class="form-control text-primary"
                                               placeholder="Masukkan Judul Tugas Akhir">
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-comment"></i> Metode Yang
                                            Dipakai</label>
                                        <input type="text" name="metode" id="metode" class="form-control text-primary"
                                               placeholder="Masukan Metode">
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-users fa-fw"></i> Calon
                                            Pembimbing 1
                                        </label>
                                        <select name="calon_pembimbing_1" id="countrycode" class="form-control">
                                            <?php foreach ($dosen as $s) { ?>
                                                <option name="<?= $s->nip ?>1" class="text-primary" value="<?= $s->nip ?>"
                                                        onclick="showDetail(<?= $s->nip ?>)"
                                                        id="<?= $s->nip ?>"><?= $s->nama ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="" style="color: #0d6aad"><i class="pe-7s-users fa-fw"></i> Calon
                                            Pembimbing 2
                                        </label>
                                        <select name="calon_pembimbing_2" id="countrycode" class="form-control">
                                            <?php foreach ($dosen as $s) { ?>
                                                <option name="<?= $s->nip ?>2" class="text-primary" value="<?= $s->nip ?>"
                                                        id="<?= $s->nip ?>"><?= $s->nama ?></option>
                                            <?php } ?>
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
                                    <?php foreach ($syarat as $d) { ?>
                                        <div class="form-group">
                                            <div class="card-header" data-background-color="purple">
                                                <label for=""><i class="fa fa-file"></i> (Upload File) <?= $d ?> </label>
                                                <input type="file" name="<?= $d ?>[]" class="upload" value="<?= $d ?>">
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-12">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Ajukan</button>
                                </div>
                            </div>
                        </form>
                    <?php } ?>
                    <!-- mahasiswa -->
                <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
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
                                    <th colspan="3">Syarat</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Pilih Review</th>
                                </tr>
                                </thead>
                                <?php $no = '#'; ?>
                                <?php foreach ($pengajuan2 as $data2) { ?>
                                    <tbody>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data2->nim ?></td>
                                        <td><?= $data2->judul ?></td>
                                        <td><?= $data2->metode ?></td>
                                        <td><a href="docs_ta/pengajuan/<?= $data2->nim ?>/<?= $data2->doc_proposal ?>"
                                               target="blank">Proposal Tugas Akhir</a>
                                        <td colspan="3">
                                            Syarat
                                        </td>
                                        
                                        <td><?= $data2->tanggal_upload ?></td>
                                        <td width="15%"><?= $this->tag->linkTo(['pengajuan/review/' . $data2->id_pengajuan, 'Pilih Review ', 'class' => 'btn btn-primary']) ?>
                                        </td>
                                    </tr>
                                    </tbody>
                                <?php } ?>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nim</th>
                                    <th>Judul</th>
                                    <th>Metode</th>
                                    <th colspan="3">Syarat</th>
                                    <th>Doc</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Pilih Riviewer</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


</script>