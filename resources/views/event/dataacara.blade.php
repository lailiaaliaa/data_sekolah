@extends('layout.admin')
@section('content')
@push('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@endpush
<body>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <br><br>
            <h1 class="m-1">Acara Sekolah</h1>
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
    <a href="/tambahacara" type ="button" class="btn btn-outline-danger">Tambah Data</a><br>
    <div class = "row g-3 align-items-center mt-2">
    <div class="col-auto">
  </div>
  </div>

        <div class="row">
  <table class="table table-bordered tabel" id="example">
  <thead class="table-danger">


                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Acara</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Tempat</th>
                        <th scope="col">Pengisi Acara</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $row)
                    <tr>
                    <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->nama }}</td>

                        <td>{{ Carbon\Carbon::parse($row->tanggal)->format('d M Y') }}</td>
                        <td>{{ $row->tempat->namatempat }}</td>
                        <td>{{ $row->pembawa }}</td>
                        <td>
                        <!-- <a href="tampilacara/ {{ $row->id }}" class="btn btn-outline-info">Ubah</a> -->
                            <a href="/deleteacara/ {{ $row->id }}" class="btn btn-outline-danger delete" data-id="{{ $row->id }}" <?php echo $row['id']; ?> onclick="return confirm('Yakin?')">Hapus</a>

                        </td>
                    </tr>

                    @endforeach

            </table>
            {{ $data->links() }}
        </div>
    </div>
</div>
</div>


   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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

    </body>


        @endsection
@push('scripts')

@endpush
