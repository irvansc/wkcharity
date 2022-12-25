<!-- jQuery -->
<script src="{{ asset('') }}/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('') }}/AdminLTE/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('') }}/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('') }}/AdminLTE/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('') }}/AdminLTE/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('') }}/AdminLTE/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('') }}/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('') }}/AdminLTE/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('') }}/AdminLTE/plugins/moment/moment.min.js"></script>

<!-- overlayScrollbars -->
<script src="{{ asset('') }}/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

@stack('scripts_vendor')

<!-- AdminLTE App -->
<script src="{{ asset('') }}/AdminLTE/dist/js/adminlte.js"></script>
<script src="{{ asset('') }}/js/custom.js"></script>

<x-toast />
@stack('scripts')

</body>
</html>