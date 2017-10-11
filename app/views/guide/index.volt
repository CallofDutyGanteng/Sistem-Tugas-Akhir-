{% if  session.hak_akses == "mahasiswa" %}
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

        {% elseif session.hak_akses == 'dosen' %}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><i class="fa fa-dashboard"></i>Dashboard</h4>
                        </div>
                        <div class="card-content">
                            Dosen
                        </div>
                    </div>
                </div>
            </div>
        {% elseif session.hak_akses == 'kordinatorTA' %}
            <div class="row">
                <div class="col-md-12">
                    <div class="card" >
                        <div class="card-header" data-background-color="purple">
                            <h4 class="title"><i class="pe-7s-global"></i> Dashboard</h4>
                        </div>
                        <div class="card-content">
                            kordinator ta
                        </div>
                    </div>
                </div>
            </div>
        {% elseif session.hak_akses == 'administrator' %}
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
    {% else %}
        <div class="row">
            <div class="col-lg-12">
                Halaman Not Found
            </div>
        </div>
    {% endif %}
</div>
</div>


