<script>
      $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

    <script type="text/javascript">
      $(document).ready(function () {
        $('#bootstrap-data-table-export').DataTable();
      });
    </script>


    <script>
      $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
      });
    </script>

    <!-- search -->
    <script>
      $(document).ready(function () {
        $("#myInput").on("keyup", function () {
          var value = $(this).val().toLowerCase();
          $("#content-table tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>
