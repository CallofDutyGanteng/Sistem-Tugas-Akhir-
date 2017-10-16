<?php if ($this->session->hak_akses == 'mahasiswa') { ?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title">Panduan-Pelaksanaan Tugas Akhir Mahasiswa Teknik</h4>
            </div>
            <div class="card-content">
                <div class="typography">
                    <div class="title">
                        <h4><i class="fa fa-dashboard"> Informasi Umum </i></h4>
                    </div>
                    <p style="text-align: justify">
                        <strong>Tugas Akhir</strong> adalah karya ilmiah yang disusun oleh mahasiswa setiap program
                        studi
                        berdasarkan hasil penelitian suatu masalah yang dilakukan secara seksama dengan bimbingan dosen
                        pembimbing. Tugas akhir merupakan salah satu persyaratan kelulusan mahasiswa.
                        Ketentuan-ketentuan
                        mengenai tugas akhir diatur oleh masing-masing fakultas, dengan mengikuti standar universitas.
                    </p>
                        <button class="btn btn-primary fa fa-download"> Download Panduan Pelaksanaa Tugas Akhir</button>
                    <hr>
                    <h4 style="color: #0c0c0c"><i class="fa fa-universal-access"> Tahap Pelaksanaan</i></h4>
                    <p style="text-align: justify">
                        Tahap Pelaksanaan Tugas Akhir Dimulai Dari Pencarian Pembimbing Jurusan, Pengajuan Ke
                        Keordinator
                        TA, Melengkapi Syarat-Syarat Yaitu Proposal, Hasil, Sidang dan akhirnya Surat Keterangan Lulus.
                    </p>
                    <div class="carousel">
                        <a href="" class="carouse"><img src="img/ta/1.jpg" width="100%" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <?php } elseif ($this->session->hak_akses == 'dosen' || $this->session->hak_akses == 'kordinatorTA') { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><i class="fa fa-calendar-times-o"></i> Pengajuan Terbaru</h4>
                        </div>
                        <div class="card-content">
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

                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($this->session->hak_akses == 'administrator') { ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title"><i class="fa fa-dashboard"></i> Dashboard</h4>
                        <p class="category">Welcome To Sistem Tugas Akhir Mahasiswa</p>
                    </div>
                    <div class="card-content">
                        administrator
                    </div>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="row">
            <div class="col-lg-12">
                Halaman Not Found
            </div>
        </div>
    <?php } ?>
</div>
</div>


