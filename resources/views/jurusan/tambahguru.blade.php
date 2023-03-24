@extends('layout.admin')

@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />@endpush

<body >
<br><br>
<h1 class="text-center mb-5">Tambah Data Guru</h1>
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-8">



                    <form action="/insertdatajurusan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                            <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                            @error('jurusan')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1">Mapel Ajaran</label>
                           <select class="custom-select" name="bahasa">
                           <option selected>pilihan</option>
                           <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                           <option value="Bahasa Jawa">Bahasa Jawa</option>
                           <option value="Bahasa Inggris">Bahasa Inggris</option>
                           <option value="Matematika">Matematika</option>
                           <option value="Agama">Agama</option>
                           <option value="PPKN">PPKN</option>
                           <option value="Penjaskes">Penjaskes</option>
                           <option value="PBO">PBO</option>
                           <option value="PWDPB">PWDPB</option>
                           <option value="PPL">PPL</option>

                         </select>

                        </div>
                        <label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <div class="form-check">
  <input  type="checkbox"  name="ajaran[]"  value="AK">AK
</div>
    <div class="form-check">
  <input  type="checkbox"  name="ajaran[]"  value="RPL"> RPL
</div>
<div class="form-check">
  <input type="checkbox"  name="ajaran[]" value="TKJ">TKJ
</div>
<div class="form-check">
  <input type="checkbox"  name="ajaran[]"   value="MM">MM
</div>
<div class="form-check">
<input type="checkbox"  name="ajaran[]"  value="TKR">TKR
</div>
<div class="form-check">
  <input  type="checkbox"  name="ajaran[]"  value="TB"> TB

</div>

<br>





                        <button type="submit" class="btn btn-outline-danger">Tambahkan</button>
                    </form>
                </div>
            </div>
            <div class="row">

            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
@endsection
