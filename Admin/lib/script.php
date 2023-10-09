<script src=<?php echo $level . VENDOR_PATH . JQUERY_PATH . "jquery.min.js" ?>></script>
<script src=<?php echo $level . VENDOR_PATH . BOOTSRAP_PATH . JS_PATH . "bootstrap.bundle.min.js" ?>></script>
<script src=<?php echo $level . JS_ADMIN_PATH . "divide-page.js" ?>></script>
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    });
</script>

<!-- search -->
<script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#content-table tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
</div>