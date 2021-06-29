<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Trang quản trị</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/theme/admin/plugins/fontawesome-free/css/all.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/theme/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->

    <!-- JQVMap -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/theme/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/theme/admin/dist/css/style.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/theme/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/theme/admin/plugins/jquery-ui/jquery-ui.css">


    <!-- DataTables -->
    <link rel="stylesheet" href="/theme/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/theme/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/theme/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/theme/admin/plugins/sweetalert2/sweetalert2.css">

    <link rel="stylesheet" href="/theme/admin/plugins/daterangepicker/daterangepicker.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="/theme/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/theme/admin/dist/css/style.css">


    @yield('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        {{-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/theme/admin/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> --}}

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" target="_blank" class="nav-link">Xem website</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/admin/dashboard/danh-sach" class="nav-link">Tổng quan</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="/admin/auth/logout">
                        <i class="fa fa-sign-out" aria-hidden="true"></i>
                        <span class="">Đăng xuất</span>
                    </a>

                </li>
                <!-- Notifications Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="/theme/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">TRANG QUẢN TRỊ</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/theme/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                            alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            @if (Auth::check())
                                {!! Auth::user()->lastname !!}
                            @endif
                        </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @can('dashboard-list')
                            <li class="nav-item menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Dashboard
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/dashboard/danh-sach" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tổng hợp</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endcan
                        @can('category-list')
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Quản lý danh mục
                                    <i class="fas fa-angle-left right"></i>

                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('category.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Danh mục sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('producttype.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Loại sản phẩm</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/attribute/danh-sach" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Attributes</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/spetification" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thông số kĩ thuật</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @endcan
                        @can('product-list')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-copy"></i>
                                    <p>
                                        Sản phẩm
                                        <i class="fas fa-angle-left right"></i>

                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('product.index') }}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Danh sách sản phẩm</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endcan


                        @can('order-list')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-pie"></i>
                                    <p>
                                        Đơn hàng
                                        <i class="right fas fa-angle-left"></i>
                                        <span class="badge badge-info right">{{ $order }}</span>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/don-hang/danh-sach" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Danh sách đơn hàng</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/don-hang/tao-don-hang" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tạo Đơn hàng</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        @endcan


                        @can('accout-list')
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Quản lý người dùng
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="/admin/user" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Danh sách người dùng</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/admin/roles" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Vai trò</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/buttons.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Danh sách permission</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pages/UI/sliders.html" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Tạo danh sách permission</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                        @endcan

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div>
        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.1.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/theme/admin/plugins/jquery/jquery.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/theme/admin/plugins/jquery-ui/jquery-ui.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 4 -->
    <script src="/theme/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="/theme/admin/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/theme/admin/plugins/sparklines/sparkline.js"></script>


    <!-- daterangepicker -->
    <script src="/theme/admin/plugins/moment/moment.min.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/theme/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summerno/theme/admin/te -->

    <script src="/theme/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/theme/admin/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/theme/admin/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/theme/admin/dist/js/pages/dashboard.js"></script>
    <script src="/theme/admin/dist/js/ajax.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script src="/theme/admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/theme/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/theme/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/theme/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/theme/admin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/theme/admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="/theme/admin/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/theme/admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/theme/admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/theme/admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="/theme/admin/plugins/sweetalert2/sweetalert2.js"></script>
    <script src="/theme/admin/plugins/bs-custom-file-input/bs-custom-file-input.js"></script>
    <script src="/theme/admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(window).on('load', function(event) {
            $('.loader').hide();
            $('.size').hide();
            $('.color').hide();
        });

    </script>
    @yield('script')
</body>

</html>
