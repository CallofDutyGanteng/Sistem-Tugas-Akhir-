<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple" id="card-header">
                <h1><i class="pe-7s-users"></i> Review Ku</h1>
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-info" id="btnReview1">
                        Review 1
                    </button>
                    <button type="button" class="btn btn-default" id="btnReview2">
                        Review 2
                    </button>
                </div>
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
                            <script type="text/javascript">
                            $('#viewReview1').show();
                            $('#viewReview2').hide();
                            $(document).ready(function () {
                                $('#btnReview1').click(function() {
                                    $('#viewReview1').show();
                                    $('#viewReview2').hide();
                                    $('#btnReview1').attr('class','btn btn-info');
                                    $('#btnReview2').attr('class','btn btn-default');
                                });
                                $('#btnReview2').click(function() {
                                    $('#viewReview2').show();
                                    $('#viewReview1').hide();
                                    $('#btnReview1').attr('class','btn btn-default');
                                    $('#btnReview2').attr('class','btn btn-info');
                                });
                            });
                            </script>
                            <?php $no = '#'; ?>
                            <?php foreach ($pengajuan2 as $data2) { ?>
                                <?php if ($data2->status == 'proses_review' && $data2->reviewer_1 == $this->session->nip_nim && $data2->nilai_1 != 0) { ?>
                                    <tbody id="viewReview1">
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $data2->nim ?></td>
                                            <td><?= $data2->judul ?></td>
                                            <td><?= $data2->metode ?></td>
                                            <td><a href="docs_ta/pengajuan/<?= $data2->nim ?>/<?= $data2->doc_proposal ?>" target="blank">Proposal Tugas Akhir</a>
                                                <td><?= $data2->tanggal_upload ?></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm btn-group-vertical">
                                                        <button type="button" class="btn btn-primary" id="btndetail<?= $data2->nim ?>">Detail</button>
                                                        <?= $this->tag->linkTo(['nilai/setnilai/' . $data2->nim, 'Nilai ', 'class' => 'btn btn-success']) ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <tr id="detail<?= $data2->nim ?>">
                                            <td colspan="7">
                                                <h2>detail review....</h2>
                                                <h2><b>Nilai :</b> <?= $data2->nilai_1 ?></h2>
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
                                <?php } elseif ($data2->status == 'proses_review' && $data2->reviewer_2 == $this->session->nip_nim && $data2->nilai_2 != 0) { ?>
                                    <tbody id="viewReview2">
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td><?= $data2->nim ?></td>
                                            <td><?= $data2->judul ?></td>
                                            <td><?= $data2->metode ?></td>
                                            <td><a href="docs_ta/pengajuan/<?= $data2->nim ?>/<?= $data2->doc_proposal ?>" target="blank">Proposal Tugas Akhir</a>
                                                <td><?= $data2->tanggal_upload ?></td>
                                                <td>
                                                    <div class="btn-group btn-group-sm btn-group-vertical">
                                                        <button type="button" class="btn btn-primary" id="btndetail<?= $data2->nim ?>2">Detail</button>
                                                        <?= $this->tag->linkTo(['nilai/setnilai/' . $data2->nim, 'Nilai ', 'class' => 'btn btn-success']) ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <tr id="detail<?= $data2->nim ?>2">
                                            <td colspan="7">
                                                <h2>detail review....</h2>
                                                <h2><b>Nilai :</b> <?= $data2->nilai_2 ?></h2>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <script type="text/javascript">
                                        $('tr#detail<?= $data2->nim ?>2').hide();
                                        $(document).ready(function() {
                                            $('#btndetail<?= $data2->nim ?>2').click(function() {
                                                $('#detail<?= $data2->nim ?>2').fadeToggle();
                                            });
                                        });
                                    </script>
                                <?php } else { ?>
                                    
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


</div>
