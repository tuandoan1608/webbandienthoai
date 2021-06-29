<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TRANG QUẢN TRỊ VIÊN</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/theme/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/theme/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/theme/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
@yield('content')
<!-- /.login-box -->

<!-- jQuery -->
<script src="/theme/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/theme/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/theme/admin/dist/js/adminlte.min.js"></script>
</body>



<!-- jQuery -->
<script src="{{url('/theme/vendors/jquery/dist/jquery.min.js')}}"></script>
<script>
    $('#errors').delay(3000).slideUp();
</script>
</html>