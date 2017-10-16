<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple" id="card-header">
                {% if session.hak_akses == "mahasiswa" %}
                    {% if pengajuan == 'true' %}
                        <h1 class="title"><i class="pe-7s-paper-plane"></i>Lihat Proposal</h1>
                    {% else %}
                        <h1 class="title"><i class="pe-7s-paper-plane"></i>Pengajuan Proposal</h1>
                    {% endif %}
                {% endif %}
                </p>
            </div>
            <div class="card-content">
                {% if session.hak_akses == "mahasiswa" %}
                    {% include 'pengajuan/mahasiswa_pengajuan.volt' %}
                {% endif %}
            </div>
        </div>
    </div>
</div>
