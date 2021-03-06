<br/>
<?php if ($this->session->hak_akses == 'mahasiswa') { ?>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">

            <div class="panel panel-heading">
                <h3 style="color: #0d6aad">Panduan-Pelaksanaan Tugas Akhir Mahasiswa Teknik</h3>
            </div>
            <div class="panel panel-body">
                <h4 style="color: #0c0c0c"><i class="fa fa-dashboard"> Informasi Umum </i></h4>
                <hr>
                <p style="text-align: justify">
                    <strong>Tugas Akhir</strong> adalah karya ilmiah yang disusun oleh mahasiswa setiap program studi
                    berdasarkan hasil penelitian suatu masalah yang dilakukan secara seksama dengan bimbingan dosen
                    pembimbing. Tugas akhir merupakan salah satu persyaratan kelulusan mahasiswa. Ketentuan-ketentuan
                    mengenai tugas akhir diatur oleh masing-masing fakultas, dengan mengikuti standar universitas.
                </p>
                <div class="alert alert-success">
                    <button class="btn btn-success fa fa-download"> Download Panduan Pelaksanaa Tugas Akhir</button>
                </div>

                <hr>
                <h4 style="color: #0c0c0c"><i class="fa fa-universal-access"> Tahap Pelaksanaan</i></h4>
                <p style="text-align: justify">
                    Tahap Pelaksanaan Tugas Akhir Dimulai Dari Pencarian Pembimbing Jurusan, Pengajuan Ke Keordinator
                    TA, Melengkapi Syarat-Syarat Yaitu Proposal, Hasil, Sidang dan akhirnya Surat Keterangan Lulus.
                </p>

            </div>
        </div>

        <?php } elseif ($this->session->hak_akses == 'dosen') { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><i class="fa fa-dashboard"> Dashboard</i></h1>
                            <p>Welcome To Sistem Tugas Akhir Mahasiswa</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel panel-heading">Dashborad User Panels Dosen
                                </div>
                                <div class="panel-body">
                                    <div style="clear: both"></div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-xs-12 text-center">
                                                        <div class="form-group">
                                                            <?= $this->tag->image(['/img/' . $this->session->foto, 'width' => '100%', 'hight' => '100%']) ?>
                                                        </div>
                                                        <button href="" class="btn btn-info" data-toggle="modal"
                                                                data-target="#myModal"><span
                                                                    class="fa fa-camera fa-fw"></span> Change Photo
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <h1>User Profile</h1>
                                        <address>
                                            <strong>NIP</strong><br>
                                            <?= $this->session->nip_nim ?>
                                        </address>
                                        <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>
                                            Edit Profil
                                        </button>
                                        <button class="btn btn-info"><span class="fa fa-eye"></span>View Profile
                                        </button>
                                        <br/><br/>
                                        <button type="" class="btn btn-success btn-block"><span
                                                    class="fa fa-key fa-fw"></span>Change Password
                                        </button>
                                    </div>
                                    <br/>
                                    <div class="col-lg-6">
                                        <div class="panel panel-warning">
                                            <div class="panel-heading">
                                                Tombol Pintasan
                                            </div>
                                            <!-- /.panel-heading -->
                                            <div class="panel-body" align="center">

                                                <!--<button href="" class="btn btn-default"><span class="fa fa-gears fa-fw"></span> Admin Support</button>-->
                                                <a href="keluar" class="btn btn-success"><span
                                                            class="fa fa-sign-out fa-fw"></span> Logout</a>

                                            </div>
                                            <!-- /.panel-body -->
                                        </div>
                                        <!-- /.panel -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h1 class="page-header"><i class="fa fa-dashboard"> Dashboard</i></h1>
                                    <p>Welcome To Sistem Tugas Akhir Mahasiswa</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-default">
                                        <div class="panel panel-heading">Dashborad User Panels Kordinator Tugas Akhir
                                        </div>
                                        <div class="panel-body">
                                            <div style="clear: both"></div>
                                            <div class="col-lg-3 col-md-6">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="row">
                                                            <div class="col-xs-12 text-center">
                                                                <div class="form-group">
                                                                    <?= $this->tag->image(['/img/' . $this->session->foto, 'width' => '100%', 'hight' => '100%']) ?>
                                                                </div>
                                                                <button href="" class="btn btn-info" data-toggle="modal"
                                                                        data-target="#myModal"><span
                                                                            class="fa fa-camera fa-fw"></span> Change
                                                                    Photo
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <h1>User Profile</h1>
                                                <address>
                                                    <strong>NIP</strong><br>
                                                    <?= $this->session->nip_nim ?>
                                                </address>
                                                <button class="btn btn-warning"><span
                                                            class="glyphicon glyphicon-edit"></span> Edit Profil
                                                </button>
                                                <button class="btn btn-info"><span class="fa fa-eye"></span>View Profile
                                                </button>
                                                <br/><br/>
                                                <button type="" class="btn btn-success btn-block"><span
                                                            class="fa fa-key fa-fw"></span>Change Password
                                                </button>
                                            </div>
                                            <br/>
                                            <div class="col-lg-6">
                                                <div class="panel panel-warning">
                                                    <div class="panel-heading">
                                                        Tombol Pintasan
                                                    </div>
                                                    <!-- /.panel-heading -->
                                                    <div class="panel-body" align="center">

                                                        <!--<button href="" class="btn btn-default"><span class="fa fa-gears fa-fw"></span> Admin Support</button>-->
                                                        <a href="keluar" class="btn btn-success"><span
                                                                    class="fa fa-sign-out fa-fw"></span> Logout</a>

                                                    </div>
                                                    <!-- /.panel-body -->
                                                </div>
                                                <!-- /.panel -->
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($this->session->hak_akses == 'administrator') { ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h1 class="page-header"><i class="fa fa-dashboard"> Dashboard</i></h1>
                                            <p>Welcome To Sistem Tugas Akhir Mahasiswa</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <div class="panel panel-heading">Dashborad User Panels Adminstrator
                                                    Sistem
                                                </div>
                                                <div class="panel-body">
                                                    <div style="clear: both"></div>
                                                    <div class="col-lg-3 col-md-6">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                                <div class="row">
                                                                    <div class="col-xs-12 text-center">
                                                                        <div class="form-group">
                                                                            <?= $this->tag->image(['/img/' . $this->session->foto, 'width' => '100%', 'hight' => '100%']) ?>
                                                                        </div>
                                                                        <button href="" class="btn btn-info"
                                                                                data-toggle="modal"
                                                                                data-target="#myModal"><span
                                                                                    class="fa fa-camera fa-fw"></span>
                                                                            Change Photo
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <h1>User Profile</h1>
                                                        <address>
                                                            <strong>NIP (Nomor Induk Pegawai)</strong><br>
                                                            <div class="alert alert-info"><?= $this->session->nip_nim ?>
                                                            </div>
                                                        </address>
                                                        <button class="btn btn-warning"><span
                                                                    class="glyphicon glyphicon-edit"></span> Edit Profil
                                                        </button>
                                                        <button class="btn btn-info"><span class="fa fa-eye"></span>View
                                                            Profile
                                                        </button>
                                                        <br/><br/>
                                                        <button type="" class="btn btn-success btn-block"><span
                                                                    class="fa fa-key fa-fw"></span>Change Password
                                                        </button>
                                                    </div>
                                                    <br/>
                                                    <div class="col-lg-6">
                                                        <div class="panel panel-warning">
                                                            <div class="panel-heading">
                                                                Tombol Pintasan
                                                            </div>
                                                            <!-- /.panel-heading -->
                                                            <div class="panel-body" align="center">

                                                                <!--<button href="" class="btn btn-default"><span class="fa fa-gears fa-fw"></span> Admin Support</button>-->
                                                                <a href="keluar" class="btn btn-success"><span
                                                                            class="fa fa-sign-out fa-fw"></span> Logout</a>

                                                            </div>
                                                            <!-- /.panel-body -->
                                                        </div>
                                                        <!-- /.panel -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
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
</div>


