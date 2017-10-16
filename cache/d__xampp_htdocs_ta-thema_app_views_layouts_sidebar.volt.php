<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="img/sidebar-4.jpg">

        <div class="logo">
            <a href="<?= $this->url->get('guide') ?>" class="simple-text">
                <span class="text-primary">Tugas Akhir</span>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="<?= $this->url->get('guide') ?>">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php if ($this->session->hak_akses == 'administrator') { ?>
                <li>
                    <a href="<?= $this->url->get('pengguna') ?>">
                        <i class="pe-7s-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                <?php } elseif ($this->session->hak_akses == 'dosen') { ?>
                    <li>
                        <a href="<?= $this->url->get('bimbinganku') ?>">
                            <i class="pe-7s-users"></i>
                            <p>Bimbingan Ku</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->url->get('reviewku') ?>">
                            <i class="pe-7s-users"></i>
                            <p>Riview Ku</p>
                        </a>
                    </li>
                <?php } elseif ($this->session->hak_akses == 'mahasiswa') { ?>
                <li>
                    <a href="<?= $this->url->get('pengajuan') ?>">
                        <i class="pe-7s-users"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>
                <?php } elseif ($this->session->hak_akses == 'kordinatorTA') { ?>
                    <li>
                        <a href="<?= $this->url->get('mahasiswa') ?>">
                            <i class="pe-7s-users"></i>
                            <p>Data Mahasiswa</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->url->get('dosen') ?>">
                            <i class="pe-7s-users"></i>
                            <p>Data Dosen</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->url->get('tunggu_review') ?>">
                            <i class="pe-7s-file"></i>
                            <p>Data Tunggu Review</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?= $this->url->get('proses_review') ?>">
                            <i class="pe-7s-file"></i>
                            <p>Data Proses review</p>
                        </a>
                    </li>
                <?php } ?>
                <li class="active-pro ">
                    <a href="keluar">
                        <i class="pe-7s-rocket "></i>
                        <p class="text-primary">Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
