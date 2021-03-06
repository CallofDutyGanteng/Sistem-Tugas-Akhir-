
    
        
    

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="blue">
                <?php foreach ($namaM as $z) { ?>
                    <h4 class="card-title">Pemilihan Reviewer Mahasiswa : <?= $z->name ?> </h4>
                <?php } ?>
            </div>
            <div class="card-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="" ><span class="text-primary">Pembimbing Jurusan</span></label>
                                <?php foreach ($nama as $s) { ?>
                                    <input type="text" class="form-control" readonly value="<?= $s->nama ?>">
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for=""><span class="text-primary">Judul Tugas Akhir</span></label>
                                <input type="text" class="form-control" value="<?= $review->judul ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for=""><span class="text-primary">Metode</span></label>
                                <input type="text" class="form-control" value="<?= $review->metode ?>" readonly>
                            </div>
                        </div>
                    </div>
                <form action="<?= $this->url->get('pengajuan/tambahreview') ?>" method="post">
                    <input type="hidden" id="id" value="<?= $review->id_pengajuan ?>" name="id_pengajuan">
                    <div class="form-group">
                        <label for="">Pilih Reviewer 1</label>
                        <select name="reviewer_1" id="reviewer_1" class="form-control">
                            <?php foreach ($php as $k) { ?>
                                <option value="<?= $k->nip ?>"><?= $k->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Pilih Reviewer 2</label>
                        <select name="reviewer_2" id="reviewer_1" class="form-control">
                            <?php foreach ($php as $k) { ?>
                                <option value="<?= $k->nip ?>"><?= $k->nama ?></option>
                            <?php } ?>
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
