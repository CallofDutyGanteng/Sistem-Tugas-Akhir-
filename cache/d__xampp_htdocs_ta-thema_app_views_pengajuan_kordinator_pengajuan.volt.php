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
                <?php if ($data2->status == 'tunggu') { ?>
                    <tbody>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $data2->nim ?></td>
                            <td><?= $data2->judul ?></td>
                            <td><?= $data2->metode ?></td>
                            <td><a href="docs_ta/pengajuan/<?= $data2->nim ?>/<?= $data2->doc_proposal ?>"
                                   target="blank">Proposal Tugas Akhir</a>
                            <td><?= $data2->tanggal_upload ?></td>
                            <td>
                                <div class="btn-group btn-group-sm btn-group-vertical">
                                    <?= $this->tag->linkTo(['pengajuan/review/' . $data2->id_pengajuan, 'Pilih Reviewer ', 'class' => 'btn btn-success']) ?>
                                    <button type="button" class="btn btn-primary" id="btndetail">Detail</button>
                                </div>
                            </td>
                        </tr>
                        <tr id="detail">
                            <td colspan="7">
                                <h6><b>calon pembimbing 1 :</b><?= $data2->calon_pembimbing_1 ?></h6>
                                <h6><b>calon pembimbing 2 :</b><?= $data2->calon_pembimbing_2 ?></h6>
                                <h6><b>Waktu Pengajuan :</b><?= $data2->tanggal_upload ?></h6>
                                <?php foreach ($pe as $p) { ?>
                                    <div class="col-sm-4 card-large">
                                        <div class="card large primary">
                                            <div class="card-image">
                                                <img src='docs_ta/pengajuan/<?= $data2->nim ?>/<?= $p ?>' alt="">
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </td>
                        </tr>
                    </tbody>
                <?php } else { ?>
                    <div class="alert alert-success"><span>semua berkas pengajuan sudah di pilih reviewernya</span></div>
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
<script type="text/javascript">
    $('tr#detail').hide();
    $(document).ready(function () {
        $('#btndetail').click(function () {
            $('#detail').fadeToggle();
        });
    });
</script>
