<div class="row">
    <div class="col-md-12">
        <div class="page-header">

        </div>
    </div>
</div>
<?php $this->flashSession->output(); ?>

<!-- Modal Edit Data Pengguna -->
<script type="text/javascript">
   $(document).ready(function () {
   $(".open_modal").click(function(e) {
      var m = $(this).attr("id");
           $.ajax({
                   url: "edit.volt",
                   type: "GET",
                   data : {modal_id: m,},
                   success: function (ajaxData){
                   $("#ModalUbah").html(ajaxData);
                   $("#ModalUbah").modal('show',{backdrop: 'true'});
               }
               });
        });
      });
</script>

<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>NIP / NIM</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Hak Akses</th>
        </tr>
        </thead>
        <tbody>
        <div class="list_pengguna"></div>
        {% for d in data %}
            <tr>
                <td>{{d.nip_nim}}</td>
                <td>{{d.nama}}</td>
                <td><img src="img/{{d.foto}}" alt="" width="120" height="84"></td>
                <td>{{d.hak_akses}}</td>
                <td>
                    <a class="btn btn-warning" data-toggle="modal" data-target="#modalUbah">Ubah</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
</div>
