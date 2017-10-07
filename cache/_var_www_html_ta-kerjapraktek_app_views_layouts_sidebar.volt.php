<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <?= $this->tag->image(['/img/' . $this->session->foto, 'width' => '100%', 'hight' => '50%', 'class' => 'img-circle']) ?>
                    
                </div>
                <!-- /input-group -->
            </li>
            <?php if ($this->session->hak_akses == 'administrator') { ?>
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
            <?php } elseif ($this->session->hak_akses == 'dosen') { ?>
            <li>
                <?= $this->tag->linkTo(['profil', ' Profil', 'class' => 'fa fa-user']) ?>
            </li>
            <li>
                <?= $this->tag->linkTo(['mahasiswa', ' Bimbingan Ku', 'class' => 'fa fa-user']) ?>
            </li>
            <li>
                <?= $this->tag->linkTo(['mahasiswa', ' Reivew Ku', 'class' => 'fa fa-user']) ?>
            </li>
                <?php } elseif ($this->session->hak_akses == 'mahasiswa') { ?>
                <li>
                    <?= $this->tag->linkTo(['profil', ' Profil', 'class' => 'fa fa-user']) ?>
                </li>
                <li>
                    <?= $this->tag->linkTo(['proposal', ' Proposal', 'class' => 'fa fa-map']) ?>
                </li>
                <?php } else { ?>
                    <p>ini bukan siapa</p>
            <?php } ?>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->