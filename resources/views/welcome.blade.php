@extends('layout.admin')

@section('content')

<body>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">


            <!-- <h1 class="m-0">Data Sekolah</h1> -->
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">

            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Sekolah</li>
            </ol>
            </div>/.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content" >

      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">




          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Siswa</span>
                <span class="info-box-number">
                  {{ $jumlahsekolah}}

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">

            <div class="info-box mb-3">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kelas 10</span>
                <span class="info-box-number">
                    {{ $jumlahtingkat10}}
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">

            <div class="info-box mb-3">
            <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kelas 11</span>
                <span class="info-box-number">
                {{ $jumlahtingkat11}}
                </span>
              </div>
            </div>
          </div>

          <div class="clearfix hidden-md-up"></div>

<div class="col-12 col-sm-6 col-md-3">
  <div class="info-box mb-3">
  <span class="info-box-icon bg-secondary elevation-1"><i class="fas fa-users"></i></span>

    <div class="info-box-content">
      <span class="info-box-text">Kelas 12</span>
      <span class="info-box-number">
      {{ $jumlahtingkat12}}
      </span>
    </div>
  </div>
</div>




<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset ('template/plugins/jquery/jquery.min.js') }}"></script>
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
</section>

  </body>
</html>
