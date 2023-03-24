@extends('layout.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Data</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                 
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="m-0">
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="/updatejurusan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                            </div>

                            <div class="form-group">
                           <label for="exampleInputEmail1" class="form-label">Tingkat</label>
                             <select class="form-select" name="bahasa"  class="form-control"  aria-label="Default select example">
                            <option selected>{{ $data->bahasa }}</option>
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


                        <div class="form-group">
                        <label for="exampleInputEmail1" >Jurusan</label>

                        <?php $dar = explode (',', $data-> ajaran)?><br>
                        <input type="checkbox" value="Ak"   name="ajaran[]" <?php if(in_array('AK',$dar)) echo 'checked';?>>AK<br>
                        <input type="checkbox" value="RPL"   name="ajaran[]" <?php if(in_array('RPL',$dar)) echo 'checked';?>>RPL<br>
                        <input type="checkbox" value="TKJ"   name="ajaran[]"  <?php if(in_array('TKJ',$dar)) echo 'checked';?>>TKJ<br>
                        <input type="checkbox" value="MM"   name="ajaran[]"  <?php if(in_array('MM',$dar)) echo 'checked';?>>MM<br>
                        <input type="checkbox" value="TKR"   name="ajaran[]" <?php if(in_array('TKR',$dar)) echo 'checked';?>>TKR<br>
                        <input type="checkbox" value="TB"   name="ajaran[]" <?php if(in_array('TB',$dar)) echo 'checked';?>>TB<br>
</div>
</div>



                        </form>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>


            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</div>



@endsection
