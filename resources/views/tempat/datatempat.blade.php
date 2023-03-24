@extends('layout.admin')
@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />@endpush


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <br><br>
            <h1 class="m-1">Data Tempat</h1>
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
    <a href="/tambahtempat" type ="button" class="btn btn-outline-danger">Tambah Data</a><br><br>
        <div class="row">
  <table class="table table-bordered " id="example">
  <thead class="table-danger">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Tempat</th>
      <th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->namatempat }}</td>
                        <td>
                        <!-- <a href="tampilacara/ {{ $row->id }}" class="btn btn-outline-info">Ubah</a> -->
                            <a href="/deletetempat/ {{ $row->id }}" class="btn btn-outline-danger delete" data-id="{{ $row->id }}" <?php echo $row['id']; ?> onclick="return confirm('Yakin?')">Hapus</a>

                        </td>
                    </tr>

                    @endforeach
              </tbody>

            </table>
        </div></div>
    </div></div>
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

