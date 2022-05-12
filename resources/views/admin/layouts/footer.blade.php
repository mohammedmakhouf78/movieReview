<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!-- Main Footer -->
<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.0.4
    </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLET/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{'AdminLET/plugins/bootstrap/js/bootstrap.bundle.min.js'}}"></script>
<!-- AdminLTE -->
<script src="{{asset('AdminLET/dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('AdminLET/plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('AdminLET/dist/js/demo.js')}}"></script>
<script src="{{asset('AdminLET/dist/js/pages/dashboard3.js')}}"></script>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

@include('sweetalert::alert')

<script>
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
</body>
</html>
