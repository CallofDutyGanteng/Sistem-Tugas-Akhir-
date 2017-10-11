<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="img/sidebar-4.jpg">

        <div class="logo">
            <a href="{{ url('guide') }}" class="simple-text">
                <span class="text-primary">Tugas Akhir</span>
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="{{ url('guide') }}">
                        <i class="pe-7s-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {% if session.hak_akses == "administrator" %}
                <li>
                    <a href="{{ url('pengguna') }}">
                        <i class="pe-7s-users"></i>
                        <p>Pengguna</p>
                    </a>
                </li>
                {% elseif session.hak_akses == "dosen" %}
                    <li>
                        <a href="">
                            <i class="pe-7s-users"></i>
                            <p>Bimbingan Ku</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-users"></i>
                            <p>Riviwer Ku</p>
                        </a>
                    </li>
                {% elseif session.hak_akses == "mahasiswa" %}
                <li>
                    <a href="{{ url('pengajuan') }}">
                        <i class="pe-7s-users"></i>
                        <p>Pengajuan</p>
                    </a>
                </li>
                {% elseif session.hak_akses == "kordinatorTA" %}
                    <li>
                        <a href="{{ url('mahasiswa') }}">
                            <i class="pe-7s-users"></i>
                            <p>Data Mahasiswa</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('dosen') }}">
                            <i class="pe-7s-users"></i>
                            <p>Data Dosen</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pengajuan') }}">
                            <i class="pe-7s-file"></i>
                            <p>Data Pengajaun</p>
                        </a>
                    </li>
                {% endif %}
                <li class="active-pro ">
                    <a href="keluar">
                        <i class="pe-7s-rocket "></i>
                        <p class="text-primary">Logout</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>