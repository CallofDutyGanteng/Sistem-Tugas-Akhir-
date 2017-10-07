<br/>
{% if  session.hak_akses == "mahasiswa"  %}
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel panel-heading">
                <h3 style="color: #0d6aad">Panduan-Pelaksanaan Tugas Akhir Mahasiswa Teknik</h3>
            </div>
            <div class="panel panel-body">
                <h4 style="color: #0c0c0c"><i class="fa fa-dashboard"> Informasi Umum </i> </h4>
                <hr>
                <p style="text-align: justify">
                    <strong>Tugas Akhir</strong> adalah karya ilmiah yang disusun oleh mahasiswa setiap program studi berdasarkan hasil penelitian suatu masalah yang dilakukan secara seksama dengan bimbingan dosen pembimbing. Tugas akhir merupakan salah satu persyaratan kelulusan mahasiswa. Ketentuan-ketentuan mengenai tugas akhir diatur oleh masing-masing fakultas, dengan mengikuti standar universitas.
                </p>
                <div class="alert alert-success">
                    <button class="btn btn-success fa fa-download"> Download Panduan Pelaksanaa Tugas Akhir</button>
                </div>

                <hr>
                <h4 style="color: #0c0c0c"><i class="fa fa-universal-access"> Tahap Pelaksanaan</i></h4>
                <p style="text-align: justify">
                    Tahap Pelaksanaan Tugas Akhir Dimulai Dari Pencarian Pembimbing Jurusan, Pengajuan Ke Keordinator TA, Melengkapi Syarat-Syarat Yaitu Proposal, Hasil, Sidang dan akhirnya Surat Keterangan Lulus.
                </p>
                <div class="container">

                    <div class="col-md-8">

                    <br/>
                    <div class="col-md-8 col-md-offset-2">

                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                                <li data-target="#myCarousel" data-slide-to="5"></li>
                            </ol>

                            <!-- deklarasi carousel -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">

                                    {{ image('img/1442659371859.jpg', 'width':'100%') }}

                                    {{ image('img/tahap 1.1.png', 'width':'100%') }}

                                    <div class="carousel-caption">
                                        <h4>PENGAMBILAN KARTU BEBAS PUSTAKA UNIVERSITAS</h4>
                                    </div>
                                </div>
                                <div class="item">

                                    {{ image('img/1442659371859.jpg', 'width':'100%') }}

                                    {{ image('img/tahap 1.2.png', 'width':'100%') }}

                                    <div class="carousel-caption">
                                        <h4>SURAT KETERANGAN LULUS SIDANG SARJANA</h4>
                                    </div>
                                </div>
                                <div class="item">

                                    {{ image('img/1442659371859.jpg', 'width':'100%') }}

                                    {{ image('img/tahap 2.1.png', 'width':'100%') }}

                                    <div class="carousel-caption">
                                        <h4>KARTU BEBAS PUSTAKA DARI FAKULTAS</h4>
                                    </div>
                                </div>
                                <div class="item">

                                    {{ image('img/1442659371859.jpg', 'width':'100%') }}

                                    {{ image('img/tahap 2.2.png', 'width':'100%') }}

                                    <div class="carousel-caption">
                                        <h4>TRANSKIP UNTUK SURAT KETERANGAN LULUS</h4>
                                    </div>
                                </div>
                                <div class="item">

                                    {{ image('img/1442659371859.jpg', 'width':'100%') }}

                                    {{ image('img/tahap 3.png', 'width':'100%') }}

                                    <div class="carousel-caption">
                                        <h4>SURAT KETERANGAN LULUS</h4>
                                    </div>
                                </div>
                                <div class="item">

                                    {{ image('img/1442659371859.jpg', 'width':'100%') }}

                                    {{ image('img/tahap 4.png', 'width':'100%') }}

                                    <div class="carousel-caption">
                                        <h4>DAFTAR WISUDA</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- membuat panah next dan previous -->
                            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
 
                {{ image('img/index.jpeg', 'width':'100%') }}


            </div>

            {% elseif session.hak_akses == 'dosen' %}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header" ><i class="fa fa-dashboard"> Dashboard</i></h1>
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
                                                                {{ image('/img/'~session.foto, 'width':'100%','hight':'100%')  }}
                                                            </div>
                                                            <button href="" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="fa fa-camera fa-fw"></span> Change Photo</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <h1>User Profile</h1>
                                            <address>
                                                <strong>NIP</strong><br>
                                                {{ session.nip_nim }}
                                            </address>
                                            <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit Profil</button>
                                            <button class="btn btn-info"><span class="fa fa-eye"></span>View Profile</button><br/><br/>
                                            <button type="" class="btn btn-success btn-block"><span class="fa fa-key fa-fw"></span>Change Password</button>
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
                                                    <a href="keluar" class="btn btn-success"><span class="fa fa-sign-out fa-fw"></span> Logout</a>

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
            {% elseif session.hak_akses == 'kordinatorTA' %}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h1 class="page-header" ><i class="fa fa-dashboard"> Dashboard</i></h1>
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
                                                                        {{ image('/img/'~session.foto, 'width':'100%','hight':'100%')  }}
                                                                    </div>
                                                                    <button href="" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="fa fa-camera fa-fw"></span> Change Photo</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <h1>User Profile</h1>
                                                    <address>
                                                        <strong>NIP</strong><br>
                                                        {{ session.nip_nim }}
                                                    </address>
                                                    <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit Profil</button>
                                                    <button class="btn btn-info"><span class="fa fa-eye"></span>View Profile</button><br/><br/>
                                                    <button type="" class="btn btn-success btn-block"><span class="fa fa-key fa-fw"></span>Change Password</button>
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
                                                            <a href="keluar" class="btn btn-success"><span class="fa fa-sign-out fa-fw"></span> Logout</a>

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
            {% elseif session.hak_akses == 'administrator' %}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h1 class="page-header" ><i class="fa fa-dashboard"> Dashboard</i></h1>
                                                <p>Welcome To Sistem Tugas Akhir Mahasiswa</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel panel-heading">Dashborad User Panels Adminstrator Sistem
                                                    </div>
                                                    <div class="panel-body">
                                                        <div style="clear: both"></div>
                                                        <div class="col-lg-3 col-md-6">
                                                            <div class="panel panel-info">
                                                                <div class="panel-heading">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 text-center">
                                                                            <div class="form-group">
                                                                                {{ image('/img/'~session.foto, 'width':'100%','hight':'100%')  }}
                                                                            </div>
                                                                            <button href="" class="btn btn-info" data-toggle="modal" data-target="#myModal"><span class="fa fa-camera fa-fw"></span> Change Photo</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <h1>User Profile</h1>
                                                            <address>
                                                                <strong>NIP (Nomor Induk Pegawai)</strong><br>
                                                                <div class="alert alert-info">{{ session.nip_nim }}
                                                                </div> </address>
                                                            <button class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit Profil</button>
                                                            <button class="btn btn-info"><span class="fa fa-eye"></span>View Profile</button><br/><br/>
                                                            <button type="" class="btn btn-success btn-block"><span class="fa fa-key fa-fw"></span>Change Password</button>
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
                                                                    <a href="keluar" class="btn btn-success"><span class="fa fa-sign-out fa-fw"></span> Logout</a>

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
            {% else %}
                <div class="row">
                    <div class="col-lg-12">
                        Halaman Not Found
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>


