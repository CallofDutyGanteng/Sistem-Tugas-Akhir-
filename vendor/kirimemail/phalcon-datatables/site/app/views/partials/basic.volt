<script>
  $(document).ready(function() {
    $('#example_basic').DataTable({
      serverSide: true,
      ajax: {
        url: "/example_querybuilder",
        method: "POST"
      },
      columns: [
        {data: "id", searchable: false},
        {data: "name"},
        {data: "email"},
        {data: "balance", searchable: false}
      ]
    });
  });
</script>


<table id="example_basic" class="table table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Balance</th>  
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>
