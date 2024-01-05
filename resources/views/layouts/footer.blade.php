<!-- Javascript -->
<script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Charts JS -->
<script src="{{ asset('assets/plugins/chart.js/chart.min.js') }}"></script>
<script src="{{ asset('assets/js/index-charts.js') }}"></script>

<!-- Page Specific JS -->
<script src="{{ asset('assets/js/app.js') }}"></script>



<!-- Datatables -->
<script src="{{ asset('dataTables/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('dataTables/jquery.dataTables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>


</body>

</html>
