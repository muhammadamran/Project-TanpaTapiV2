<script src="assets-cms/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets-cms/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets-cms/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="assets-cms/libs/js/main-js.js"></script>
<!-- <script src="assets-cms/libs/js/choise.js"></script> -->
<!-- Autocomple -->
<script type="text/javascript">
    $(document).ready(function() {
        $(".preloader").fadeOut();
    })

    $(document).ready(function() {
        $('#dataTables').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 15, 20, 25, 50, 100, 150, 200, 250, 300, -1],
                [10, 15, 20, 25, 50, 100, 150, 200, 250, 300, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });

    $(document).ready(function() {
        $('#dataTablesN').DataTable({
            "order": [],
            lengthMenu: [
                [10, 25, 50, 100, 150, 200, 250, 300, -1],
                [10, 25, 50, 100, 150, 200, 250, 300, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
</script>
</body>

</html>