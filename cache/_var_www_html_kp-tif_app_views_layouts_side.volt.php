<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <?= $this->tag->image(['img/l_uin.png', 'width' => '100%']) ?>
                </div>
                <!-- /input-group -->
            </li>
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
            <li>
                <?= $this->tag->linkTo(['proposal', ' Syarat Proposal', 'class' => 'fa fa-map']) ?>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->