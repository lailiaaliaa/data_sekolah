@extends('layout.admin')
@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />@endpush



<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <br><br>
            <h1 class="m-1">Data Guru</h1>
<br>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      </div>


  <div class="container">
    @if($message = Session::get('success'))
    <div class="alert alert-warning"  role="alert">
    {{$message}}
</div>
@endif
    <a href="/tambahguru" type ="button" class="btn btn-outline-danger">Tambah Data</a><br><br>
        <div class="row">
  <table class="table table-bordered" id="example">
  <thead class="table-danger">

<!--

<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
<br><br>
                    <h1 class="text-dark m-2">Data Guru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Data Guru</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

            @if ($message =Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $message }}
            </div>

            @endif
    <div class="container">
        <a href="/tambahjurusan" class="btn btn-outline-danger">Tambah Data</a>

<br><br>

  <table class="table table-bordered ">
  <thead class="table-danger"> -->


                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Mapel Ajaran</th>
                        <th scope="col">Mengajar Kelas</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $index => $row)
                    <tr>
                        <th scope="row">{{ $index + $data->firstItem() }}</th>
                        <td>{{ $row->jurusan }}</td>
                        <td>{{ $row->bahasa }}</td>
                        <td>{{ $row->ajaran }}</td>
                        <td>

                            <a href="/deletejurusan/ {{ $row->id }}" class="btn btn-outline-danger delete" data-id="{{ $row->id }}" <?php echo $row['id']; ?> onclick="return confirm('Yakin?')">Hapus</a>

                        </td>
                    </tr>

                    @endforeach

            </table>
        </div>
    </div>
</div>
</div>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

    <script>
     $(document).ready(function() {
    $('#example').DataTable( {
        language: {
            url: "{{asset('template/dist/js/bahasa.json')}}"
        }
    } );
} );

    </script>

        @endsection
