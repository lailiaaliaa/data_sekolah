<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>welcome</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page"  style = "background-size:cover; background-image :url(logosekolah/brk.jpeg)" >
<div class="login-box"><br>
  <!-- /.login-logo -->
  <div ><br><br><br>
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk apabila memiliki akun</p>

      <form action="/loginproses" method="post">
        @csrf

@error('email')
                    <i class="alert text-danger">{{ $message }}</i>
                    @enderror('email')
        <div class="input-group mb-3" >
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>


        @error('password')
                            <i class="alert text-danger">{{ $message }}</i>
                            @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Sandi">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">

            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-outline-dark btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <p class="mb-0">
        <a href="/register" class="text-dark">Daftar akun</a>
      </p>

    </div>
    <p class="mb-0">
        <a href="/landing" class="text-dark">Halaman Depan</a>
      </p>

    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<br>


<!-- jQuery -->
<script src="{{ asset('template/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/dist/js/adminlte.min.js') }}"></script>




</body>
</html>
