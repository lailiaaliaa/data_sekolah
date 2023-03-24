
<!DOCTYPE html>
<html lang="en">
<head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style = "background-size:cover; background-image :url(logosekolah/smpl.jpeg)">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Sekolah</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('template/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('template/dist/css/adminlte.min.css') }}">
  @stack('css')


<div class="wrapper" >

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="{{ asset ('template/dist/img/smk4.jpg') }}" alt="Lailiaaliaa" height="200" width="200">
  </div>

  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-active"> -->
    <!-- Left navbar links -->
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

    </ul> -->

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">

        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </form>
        </div>
      </li>

  <aside class="main-sidebar sidebar-danger-danger elevation-4">
    <!-- Brand Logo -->
    <a class="brand-link">
    </a>
<br>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset ('template/dist/img/e.jpeg')}}" class="img-circle elevation-2" alt="User Image">
        </div>

        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">

      <div class="input-group-append">
      <button class="btn btn-sidebar">

            </button>
          </div>
        </div>
      </div>
<br>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tv"></i>
              <p>
                Beranda
            </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon	fas fa-user-tie "></i>
              <p>
               Kepala Sekolah
            </p>
            </a>
          </li> -->

          <br>
          <li class="nav-item">
            <a href="/datatempat" class="nav-link">
              <i class="nav-icon fas fa-neuter"></i>
              <p>
                Tambah Tempat Acara
            </p>
            </a>
          </li>



          <li class="nav-item">
            <a href="/Acara" class="nav-link">
              <i class="nav-icon fas fa-atom"></i>
              <p>
               Acara Sekolah

              </p>
            </a>
         </li>


          <li class="nav-item">
            <a href="/Guru" class="nav-link">
              <i class="nav-icon  fas fa-user-alt"></i>
              <p>
               Guru
            </p>
            </a>
          </li>



              <li class="nav-item">
            <a href="/Siswa" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Siswa

              </p>
            </a>
         </li>

         <!-- <li class="nav-item">
            <a href="/siswa" class="nav-link">
              <i class="nav-icon fas fa-user-slash"></i>
              <p>
                Siswa Keluar

              </p>
            </a> -->
         </li>
         <li class="nav-item">
            <a href="/kelas" class="nav-link">
              <i class="nav-icon 	fas fa-school"></i>
              <p>
                Ruang Kelas

              </p>
            </a>
         </li>

              <li class="nav-item">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out-alt"></i>
              <p>
                Keluar

              </p>
            </a>
          </li>


        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  @yield('content')

  <!-- /.content-wrapper -->

 <!-- Control Sidebar -->


</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
<!-- <script src="{{ asset ('template/plugins/jquery/jquery.min.js') }}"></script> -->
<!-- Bootstrap -->
<script src="{{ asset ('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset ('template/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset ('template/dist/js/adminlte.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset ('template/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
<script src="{{ asset ('template/plugins/raphael/raphael.min.js') }}"></script>
<script src="{{ asset ('template/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset ('template/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset ('template/plugins/chart.js/Chart.min.js') }}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{ asset ('template/dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset ('template/dist/js/pages/dashboard2.js') }}"></script>




</body>
</html>
@stack('scripts')
