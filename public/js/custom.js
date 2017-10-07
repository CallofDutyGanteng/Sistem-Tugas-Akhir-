jQuery(document).ready(function () {

  /*function fetch_data() {
    $.ajax({
      type: "POST",
      url: "index/list/",
      contentType: "application/json",

      success:function(response){
        $('#list_mahasiswa').html(response);
      }
    });
  }

  fetch_data();*/

  $('#modalHapus').on('show.bs.modal', function(e) {
    //$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    $(this).find('.btn-ok').attr('href', $(e.relatedTarget).attr('data-href'));
    $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
  });

  $(document).on("click",'#editbtn',function() {
    var nim = $(this).data('nim');
    var name = $(this).data('nama');
    var department = $(this).data('depart');


    $(".edit_nim").val(nim);
    $(".edit_name").val(name);
    $(".edit_department").val(department);
  });
})
