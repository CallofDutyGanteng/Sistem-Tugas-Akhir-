<?php foreach ($dosenKomentar as $data3) { ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header" data-background-color="blue">
                    <h4 class="card-title pe-7s-diamond"> Judul Tugas Akhir <?= $data3->judul ?></h4>
                </div>
                <div class="card-content">
                    <div class="form-group">
                        <label class="pe-7s-angle-right"> Nim</label>
                        <input type="text" value="<?= $data3->nim ?>" readonly class="form-control">
                        <label for="" class="pe-7s-angle-right"> Metode</label>
                        <input type="text" value="<?= $data3->metode ?>" readonly="" class="form-control">
                        <label for="" class="pe-7s-download"> Download Proposal</label><br/>
                        <a href="docs_ta/pengajuan/<?= $data3->nim ?>/<?= $data3->doc_proposal ?>" target="_blank"
                           class="btn btn-info">Download</a>
                    </div>
                    <div class="">
                        <h3>Komentar</h3>
                        <?php foreach ($komentar as $komentars) { ?>
                            <?php if ($data3->id_pengajuan == $komentars->kd_pengajuan) { ?>
                                
                                <p>Author : <?= $komentars->author ?></p>
                                <p>Komentar : <?= $komentars->content ?></p>
                                <p>Tanggal / Jam : <?= $komentars->create_time ?></p>
                                <hr style="color: red">
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-footer">
                    <form action="komentar/create" method="post">
                        <div class="form-group">
                            <label for=""><span class="text-danger">Author</span></label>
                            <input type="hidden" name="kode_pengajuan" value="<?= $data3->id_pengajuan ?>">
                            <input type="text " name="nama" readonly class="form-control text-primary"
                                   value="<?= $this->session->nama ?>">
                            <label for=""><span class="text-danger">Komentar</span></label>
                            <textarea name="comment" id="comeent" cols="30" rows="2" class="form-control"
                                      placeholder="Tulis Komentar"></textarea>
                            <button type="submit" class="btn btn-info btn-lg">Komentar</button>
                            <?php $this->flashSession->output(); ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
