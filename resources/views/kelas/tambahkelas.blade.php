@extends('layout.admin')

@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />@endpush

<body>
<br><br>
  <h1 class="text-center mb-5">Tambah Data</h1>
    <div class="container">
        <div class="row justify-content-center">
         <div class="col-8">

  <form action="/insertkelas" method="POST" enctype="multipart/form-data">
   @csrf

<label for="exampleInputEmail1" class="form-label">Jurusan</label>
    <div class="form-check">
  <input  type="checkbox"  name="jurusan[]"  value="AK">AK
</div>
    <div class="form-check">
  <input  type="checkbox"  name="jurusan[]"  value="RPL"> RPL
</div>
<div class="form-check">
  <input type="checkbox"  name="jurusan[]" value="TKJ">TKJ
</div>
<div class="form-check">
  <input type="checkbox"  name="jurusan[]"   value="MM">MM
</div>
<div class="form-check">
<input type="checkbox"  name="jurusan[]"  value="TKR">TKR
</div>
<div class="form-check">
  <input  type="checkbox"  name="jurusan[]"  value="TB"> TB

</div>
<br>
<div class="form-group">
    <label for="exampleInputEmail1">Tingkat</label>
    <select class="custom-select" name="kelas">
      <option selected>Kelas</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>

    </select>
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1" >Jumlah Siswa</label>
    <input type="number" name="anak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
<br>

  <button type="submit" class="btn btn-outline-danger">Masukkan</button>

</form>
  </div></div>
</div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   </body>
   @endsection
   @push('scripts')
