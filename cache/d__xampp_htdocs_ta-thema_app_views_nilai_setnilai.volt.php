
    



<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header" data-background-color="purple">
                <h4 class="title"><i class="pe-7s-switch"></i>
                    Form Penilai
                    <?= $row_pengajuan->judul ?>
                </h4>
            </div>
            <div class="card-content">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead class="text-primary">
                        <tr class="text-center">
                            <th>NO</th>
                            <th>KRITERIA</th>
                            <th>BOBOT</th>
                            <th>INDIKATOR</th>
                            <th>NILAI</th>
                            <th>jumlah</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 1; ?>
                        <?php foreach ($y as $i) { ?>
                        <?php $counter = $counter + 1; ?>
                        <tr>
                            <td width="2%"><?= $counter ?></td>
                            <td width="20%"><?= $i[0] ?></td>
                            <td><?= $i[1] ?></td>
                            <td>
                                <?= $i[2] ?><br/>
                                <?= $i[3] ?><br/>
                                <?= $i[4] ?><br/>
                                <?= $i[5] ?><br/>
                            </td>
                            <td width='10%'><b>nilai : </b>
                                <select onkeyup="total()" name="indikator<?= $counter ?>" id="indikator<?= $counter ?>" >
                                    <?php foreach (range(1, 5) as $opt) { ?>
                                        <option value="<?= $opt ?>"><?= $opt ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                            <td>
                                <script type="text/javascript">
                                $("#indikator<?= $counter ?>").change(function() {
                                    var terpilih<?= $counter ?> = $(this).find("option:selected").val();
                                    var terpilih<?= $counter ?> = parseInt(terpilih<?= $counter ?>);
                                    var bobot<?= $counter ?> = parseInt(<?= $i[1] ?>);
                                    var hasil = terpilih<?= $counter ?>*bobot<?= $counter ?>;
                                    $('#jumlah<?= $counter ?>').text(hasil);
                                });
                                </script>
                                <h4 id="jumlah<?= $counter ?>"><?= $i[1] ?></h4>
                            </td>
                        <?php } ?>
                        </tr>
                        </tbody>
                    </table>
                    <button type="button" class="btn btn-lg btn-primary" id="btnTotal">
                        Total
                    </button>
                    <script type="text/javascript">
                    $(document).ready(function () {
                        $('#btnTotal').click(function () {
                            <?php $counter = 1; ?>
                            <?php foreach ($y as $i) { ?>
                            <?php $counter = $counter + 1; ?>
                                var jumlah<?= $counter ?> = $('#jumlah<?= $counter ?>').text();
                                var jumlah<?= $counter ?> = parseInt(jumlah<?= $counter ?>);
                            <?php } ?>
                            var total =
                            <?php $counter = 1; ?>
                            <?php foreach ($y as $i) { ?>
                            <?php $counter = $counter + 1; ?>
                                jumlah<?= $counter ?>+
                            <?php } ?>
                            0 ;
                            $('#total').val(total);
                        });
                    });
                    </script>
                    <?= $this->tag->form(['nilai/add', 'method' => 'post']) ?>
                        <h3>Total : <input type="text" id="total" name="total"></input></h3>
                        <input type="hidden" name="id_pengajuan" value="<?= $row_pengajuan->id_pengajuan ?>">
                        <input type="hidden" name="reviewer" value="<?= $this->session->nip_nim ?>">
                        <button type="submit" class="btn btn-success" id="simpan">Simpan</button>
                    <form/>
                </div>
            </div>
        </div>
    </div>
</div>
