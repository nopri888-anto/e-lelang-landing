<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords"
    content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template" />
  <meta name="description"
    content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework" />
  <meta name="robots" content="noindex,nofollow" />
  <title>Admin E-Lelang</title>
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('backend')}}/assets/images/favicon.png" />
  <!-- Custom CSS -->
  <link href="{{asset('backend/assets/libs/flot/css/float-chart.css')}}" rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/extra-libs/multicheck/multicheck.css" />
  <link href="{{asset('backend')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet" />
  <link href="{{asset('backend')}}/dist/css/style.min.css" rel="stylesheet" />
  <link rel="stylesheet"type="text/css"href="{{asset('backend')}}/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"/>
  <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/libs/quill/dist/quill.snow.css"/>
  <link rel="stylesheet" type="text/css" href="{{asset('backend')}}/assets/libs/select2/dist/css/select2.min.css"/>
</head>

<body>
  <div class="preloader">
    <div class="lds-ripple">
      <div class="lds-pos"></div>
      <div class="lds-pos"></div>
    </div>
  </div>
  <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
    data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    <header class="topbar" data-navbarbg="skin5">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
          <a class="navbar-brand" href="#">
            <b class="logo-icon ps-2">
              <img src="{{asset('backend')}}/assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25" />
            </b>
            <span class="logo-text ms-2">
              <img src="{{asset('backend')}}/assets/images/logo-text.png" alt="homepage" class="light-logo" />
            </span>
          </a>
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
              class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
          <ul class="navbar-nav float-start me-auto">
            <li class="nav-item d-none d-lg-block">
              <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a>
            </li>
          </ul>
          <ul class="navbar-nav float-end">
            <li class="nav-item dropdown">
                <span style="color: white;">{{ Auth::user()->name }}</span>
              <a class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                    pro-pic
                  " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('backend')}}/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31" />
              </a>
              <ul class="dropdown-menu dropdown-menu-end user-dd animated" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <div class="dropdown-divider"></div>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <aside class="left-sidebar" data-sidebarbg="skin5">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav" class="pt-4">
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.html" aria-expanded="false"><i
                  class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('backend.admin.user')}}" aria-expanded="false"><i
                  class="mdi mdi-chart-bar"></i><span class="hide-menu">User</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('backend.admin.vendor')}}" aria-expanded="false"><i
                  class="mdi mdi-chart-bubble"></i><span class="hide-menu">Vendor</span></a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('backend.admin.lelang')}}" aria-expanded="false"><i
                  class="mdi mdi-border-inside"></i><span class="hide-menu">Lelang</span></a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    

    @yield('content')

    <footer class="footer text-center">
      All Rights Reserved by Sistem E-Lelang.
    </footer>
  </div>
  @include('sweetalert::alert')
</div>
<script src="{{asset('backend')}}/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('backend')}}/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="{{asset('backend')}}/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="{{asset('backend')}}/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="{{asset('backend')}}/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="{{asset('backend')}}/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="../dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="{{asset('backend')}}/assets/libs/flot/excanvas.js"></script>
<script src="{{asset('backend')}}/assets/libs/flot/jquery.flot.js"></script>
<script src="{{asset('backend')}}/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="{{asset('backend')}}/assets/libs/flot/jquery.flot.time.js"></script>
<script src="{{asset('backend')}}/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="{{asset('backend')}}/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="{{asset('backend')}}/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="{{asset('backend')}}/dist/js/pages/chart/chart-page-init.js"></script>
<script src="{{asset('backend')}}/assets/extra-libs/DataTables/datatables.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/quill/dist/quill.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/select2/dist/js/select2.full.min.js"></script>
<script src="{{asset('backend')}}/assets/libs/select2/dist/js/select2.min.js"></script>
 <script>
    $("#zero_config").DataTable();
    /*datwpicker*/
    jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
  </script>
</body>

</html>