{% if  session.hak_akses == "mahasiswa" %}
    {% include 'guide/mahasiswa_guide.volt' %}
{% elseif session.hak_akses == 'dosen' OR session.hak_akses == 'kordinatorTA'  %}
    {% include "guide/komentar.volt" %}
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
