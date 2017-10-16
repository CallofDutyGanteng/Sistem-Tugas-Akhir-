<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple" id="card-header">
                <h1 class="title"><i class="pe-7s-file"></i>Proses Riview</h1>
            </div>
            <div class="card-content">
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
                                    <th>Waktu Pengajuan</th>
                                    <th>Pilih Review</th>
                                </tr>
                            </thead>
                            <?php $no = '#'; ?>
                                <?php foreach ($pengajuan2 as $data2) { ?>
                                    <?php if ($data2->status == 'proses_review') { ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $data2->nim ?></td>
                                            <td><?= $data2->judul ?></td>
                                            <td><?= $data2->metode ?></td>
                                            <td><a href="docs_ta/pengajuan/<?= $data2->nim ?>/<?= $data2->doc_proposal ?>" target="blank">Proposal Tugas Akhir</a>
                                                <td><?= $data2->tanggal_upload ?></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm btn-group-vertical">
                                                        <?= $this->tag->linkTo(['pengajuan/review/' . $data2->id_pengajuan, 'Ganti Reviewer ', 'class' => 'btn btn-success']) ?>
                                                        <button type="button" class="btn btn-primary" id="btndetail<?= $data2->nim ?>">Detail</button>
                                                    </div>
                                                </td>
                                        </tr>
                                        <tr id="detail<?= $data2->nim ?>">
                                            <td colspan="7">
                                                <h6>
                                                    <b>pembimbing 1 :</b>
                                                    <?php foreach ($dosen as $d) { ?>
                                                        <?php if ($data2->calon_pembimbing_1 == $d->nip) { ?>
                                                            <?= $d->nama ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </h6>
                                                <h6>
                                                    <b>pembimbing 2 :</b>
                                                    <?php foreach ($dosen as $d) { ?>
                                                        <?php if ($data2->calon_pembimbing_2 == $d->nip) { ?>
                                                            <?= $d->nama ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </h6>
                                                <h6>
                                                    <b>reviewer 1 :</b>
                                                    <?php foreach ($dosen as $d) { ?>
                                                        <?php if ($data2->reviewer_1 == $d->nip) { ?>
                                                            <?= $d->nama ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </h6>
                                                <h6>
                                                    <b>reviewer 2 :</b>
                                                    <?php foreach ($dosen as $d) { ?>
                                                        <?php if ($data2->reviewer_2 == $d->nip) { ?>
                                                            <?= $d->nama ?>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </h6>
                                                <h6><b>Waktu Pengajuan :</b><?= $data2->tanggal_upload ?></h6>
                                                
                                            </td>
                                        </tr>
                                    </tbody>
                                    <script type="text/javascript">
                                        $('tr#detail<?= $data2->nim ?>').hide();
                                        $(document).ready(function() {
                                            $('#btndetail<?= $data2->nim ?>').click(function() {
                                                $('#detail<?= $data2->nim ?>').fadeToggle();
                                            });
                                        });
                                    </script>
                                    <?php } elseif ($data2->status == 'selesai_review') { ?>
                                        <div class="alert alert-success"><span>semua berkas pengajuan sudah di review</span></div>
                                    <?php } else { ?>
                                        <div class="alert alert-warning"><span>tidak ada berkas pengajuan yang di review</span></div>
                                    <?php } ?>
                                <?php } ?>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Nim</th>
                                    <th>Judul</th>
                                    <th>Metode</th>
                                    <th>Doc</th>
                                    <th>Waktu Pengajuan</th>
                                    <th>Pilih Riviewer</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
