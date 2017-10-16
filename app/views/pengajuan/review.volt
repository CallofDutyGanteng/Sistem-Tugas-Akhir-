{#<ul class="pager">#}
    {#<li class="previous pull-left">#}
        {#{{ link_to("pengajuan", "&larr;  Kembali") }}#}
    {#</li>#}
{#</ul>#}
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                {% for z in namaM %}
                    <h4 class="card-title">Pemilihan Reviewer Mahasiswa : {{ z.name }} </h4>
                {% endfor %}
            </div>
            <div class="card-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" ><span class="text-primary">Pembimbing Jurusan</span></label>
                                {% for s  in  nama %}
                                    <input type="text" class="form-control" readonly value="{{ s.nama }}">
                                {% endfor %}
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for=""><span class="text-primary">Judul Tugas Akhir</span></label>
                                <input type="text" class="form-control" value="{{ review.judul }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for=""><span class="text-primary">Metode</span></label>
                                <input type="text" class="form-control" value="{{ review.metode }}" readonly>
                            </div>
                        </div>
                    </div>
                <form action="{{url('pengajuan/tambahreview')}}" method="post">
                    <input type="hidden" id="id" value="{{ review.id_pengajuan }}" name="id_pengajuan">
                    <div class="form-group">
                        <label for="">Pilih Reviewer 1</label>
                        <select name="reviewer_1" id="reviewer_1" class="form-control">
                            {% for k in php %}
                                <option value="{{ k.nip }}">{{ k.nama }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Reviewer 2</label>
                        <select name="reviewer_2" id="reviewer_1" class="form-control">
                            {% for k in php %}
                                <option value="{{ k.nip }}">{{ k.nama }}</option>
                            {% endfor %}
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-lg col-lg-12 col-md-12">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
