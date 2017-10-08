<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <?= $this->tag->image(['img/e-mahasiswa.png', 'width' => '200', 'heigth' => '160', 'class' => 'offsside']) ?>
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                     
                </div>
                <!-- /input-group -->
            </li>
            <?php if ($this->session->hak_akses == 'administrator') { ?>
                <li>
                    <?= $this->tag->linkTo(['guide', ' Home', 'class' => 'fa fa-home']) ?>
                </li>
                <li>
                    <?= $this->tag->linkTo(['pengguna', ' Pengguna', 'class' => 'fa fa-user']) ?>
                </li>
                <li>
                    <?= $this->tag->linkTo(['setting', ' Settings', 'class' => 'fa fa-gear']) ?>
                </li>
            <?php } elseif ($this->session->hak_akses == 'dosen') { ?>
                    <li>
                        <?= $this->tag->linkTo(['profil', ' Profil', 'class' => 'fa fa-user']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['proposal', ' Syarat Proposal', 'class' => 'fa fa-map']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['mahasiswa', ' Bimbingan Ku', 'class' => 'fa fa-user']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['mahasiswa', ' Reivew Ku', 'class' => 'fa fa-user']) ?>
                    </li>
                <?php } elseif ($this->session->hak_akses == 'mahasiswa') { ?>
                    <li>
                        <?= $this->tag->linkTo(['pengajuan', ' Pengajuan', 'class' => 'fa fa-map']) ?>
                    </li>
                    <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
                    <li>
                        <?= $this->tag->linkTo(['guide', ' Home', 'class' => 'fa fa-home']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['mahasiswa', ' Mahasiswa', 'class' => 'fa fa-user']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['dosen', ' Dosen', 'class' => 'fa fa-user-plus']) ?>
                    </li>
                    <li>
                        <?= $this->tag->linkTo(['syarat', ' Syarat Tugas Akhir', 'class' => 'fa fa-file']) ?>
                    </li>
                    <?php } ?>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
