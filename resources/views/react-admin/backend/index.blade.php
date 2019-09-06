<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ url('admin/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('admin/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('admin/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('admin/dist/css/AdminLTE.min.css') }}">


  <link rel="stylesheet"
    href="{{ url('admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">

  <!-- select2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />

  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ url('admin/dist/css/skins/skin-blue.min.css')}} ">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->


  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">





  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('admin/css/all.min.css')}}">

  <!-- datatable -->
  <link rel="stylesheet" href="{{url('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}} ">

  <!-- modal -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

  <!-- Additional style -->
  <link rel="stylesheet" href="{{url('admin/css/style.css')}}">


  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div id="app"></div>



  <!-- REQUIRED JS SCRIPTS -->

  <!-- jQuery 3 -->
  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{url('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{url('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('admin/dist/js/adminlte.min.js')}}"></script>

  <!-- InputMask -->
  <script src="{{url('admin/plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{url('admin/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{url('admin/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{url('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- DataTables -->
  <script src="{{url('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{url('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{url('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{url('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>


  <!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->


  <!-- Font Awesome -->
  <script src="{{url('admin/js/all.min.js')}}"></script>

  <!-- Dropzone -->
  <script src="{{url('admin/js/dropzone.js')}}"></script>


  <!-- Select2 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>



  <script src="{{url('admin/js/script.js')}}"></script>
</body>

</html>