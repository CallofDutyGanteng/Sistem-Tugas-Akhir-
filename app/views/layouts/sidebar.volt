<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            {{ image('img/e-mahasiswa.png', 'width':'200' ,'heigth' : '160' ,'class' : 'offsside') }}
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    {#{{ image('/img/'~session.foto, 'width':'100%' ,'class':'img-circle') }}#} {#

                    <div class="" style="text-align: center">{{ session.hak_akses }}</div>#}
                </div>
                <!-- /input-group -->
            </li>
            {% if session.hak_akses == 'administrator' %}
                <li>
                    {{ link_to('guide',' Home','class':'fa fa-home') }}
                </li>
                <li>
                    {{ link_to('pengguna',' Pengguna','class':'fa fa-user') }}
                </li>
                <li>
                    {{ link_to('setting',' Settings' , 'class' : 'fa fa-gear') }}
                </li>
            {% elseif session.hak_akses == 'dosen'%}
                    <li>
                        {{ link_to('profil',' Profil' , 'class' : 'fa fa-user') }}
                    </li>
                    <li>
                        {{ link_to('proposal',' Syarat Proposal' , 'class' : 'fa fa-map') }}
                    </li>
                    <li>
                        {{ link_to('mahasiswa',' Bimbingan Ku','class' : 'fa fa-user') }}
                    </li>
                    <li>
                        {{ link_to('mahasiswa',' Reivew Ku','class' : 'fa fa-user') }}
                    </li>
                {% elseif session.hak_akses == 'mahasiswa' %}
                    <li>
                        {{ link_to('pengajuan',' Pengajuan' , 'class' : 'fa fa-map') }}
                    </li>
                    {% elseif session.hak_akses == 'kordinatorTA' %}
                    <li>
                        {{ link_to('guide',' Home','class':'fa fa-home') }}
                    </li>
                    <li>
                        {{ link_to('mahasiswa',' Mahasiswa','class':'fa fa-user') }}
                    </li>
                    <li>
                        {{ link_to('dosen',' Dosen' , 'class' : 'fa fa-user-plus') }}
                    </li>
                    <li>
                        {{ link_to('syarat',' Syarat Tugas Akhir' , 'class' : 'fa fa-file') }}
                    </li>
                    {% endif %}

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
