<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Sneaker | DoQuocPhong</title>

    <link rel="stylesheet" href="<?php echo asset('public/mystyle1.css');?>" type="text/css">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?php echo asset('public/admin/plugins/fontawesome-free/css/all.min.css');?>">
    <link rel="stylesheet" href="<?php echo asset('public/client/css/font-awesome.min.css');?>" type="text/css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
{{--    <link rel="stylesheet" href="public/admin/dist/css/adminlte.min.css">--}}
    <link rel="stylesheet" href="<?php echo asset('public/admin/dist/css/adminlte.min.css');?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- DataTables -->
{{--    <link rel="stylesheet" href="public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">--}}
    <link rel="stylesheet" href="<?php echo asset('public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css');?>">
{{--    <link rel="stylesheet" href="public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">--}}
    <link rel="stylesheet" href="<?php echo asset('public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css');?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo asset('public/admin/plugins/summernote/summernote-bs4.css')?>">

    <link rel="stylesheet" href="<?php echo asset('public/admin/css/layout.css')?>">


</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    @include('admin.layout.menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    @include('admin.layout.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
{{--<script src="public/admin/plugins/jquery/jquery.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap -->
{{--<script src="public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- AdminLTE -->
{{--<script src="public/admin/dist/js/adminlte.js"></script>--}}
<script src="<?php echo asset('public/admin/dist/js/adminlte.js');?>"></script>

<!-- OPTIONAL SCRIPTS -->
{{--<script src="public/admin/plugins/chart.js/Chart.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/chart.js/Chart.min.js');?>"></script>

{{--<script src="public/admin/dist/js/demo.js"></script>--}}
<script src="<?php echo asset('public/admin/dist/js/demo.js');?>"></script>

{{--<script src="public/admin/dist/js/pages/dashboard3.js"></script>--}}
<script src="<?php echo asset('public/admin/dist/js/pages/dashboard3.js');?>"></script>

<!-- DataTables -->
{{--<script src="public/admin/plugins/datatables/jquery.dataTables.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/datatables/jquery.dataTables.min.js');?>"></script>

{{--<script src="public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js');?>"></script>

{{--<script src="public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js');?>"></script>

{{--<script src="public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js');?>"></script>

<!-- AdminLTE App -->
{{--<script src="public/admin/dist/js/adminlte.min.js"></script>--}}
<script src="<?php echo asset('public/admin/dist/js/adminlte.min.js');?>"></script>

<!-- AdminLTE for demo purposes -->
{{--<script src="public/admin/dist/js/demo.js"></script>--}}
<script src="<?php echo asset('public/admin/dist/js/demo.js');?>"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
        //Money Euro
        $('[data-mask]').inputmask()

        // Summernote
        $('.textarea').summernote()
    });

    $(document).ready(function () {
        $("#changepassword").change(function () {
            if ($(this).is(":checked")) {
                $(".password").removeAttr('disabled');
            } else {
                $(".password").attr('disabled', '');
            }
        });
    });

    $(function () {
        $("input[data-bootstrap-switch]").each(function(){
            $(this).bootstrapSwitch('state', $(this).prop('checked'));
        });
    })

</script>

<!-- InputMask -->

<script src="<?php echo asset('public/admin/plugins/moment/moment.min.js');?>"></script>
<script src="<?php echo asset('public/admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js');?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
<!-- bs-custom-file-input -->
<script src="<?php echo asset('public/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js');?>"></script>

<!-- Summernote -->
<script src="<?php echo asset('public/admin/plugins/summernote/summernote-bs4.min.js');?>"></script>
<!-- Bootstrap Switch -->
{{--<script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>--}}
<script src="<?php echo asset('public/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js');?>"></script>

</body>
</html>

