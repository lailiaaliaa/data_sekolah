@extends('layout.admin')

@section('content')


<h1 class="text-center mb-5">Edit Data </h1>
  <div class="container" >
      <div class="row justify-content-center" >
       <div class="col-8">



<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <!-- <div class="col-sm-6">
                    <h1 class="m-0">Ubah Data</h1>
                </div> -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

    <!-- /.content-header -->

    <body>
        <div class="container">

                <div class="m-0">
                </div>
                <!-- <div class="card"> -->
                    <!-- <div class="card-body"> -->
                        <form action="/updatekelas/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1" >Jurusan</label>

                        <?php $dar = explode (',', $data-> jurusan)?><br>
                        <input type="checkbox" value="Ak"   name="jurusan[]" <?php if(in_array('AK',$dar)) echo 'checked';?>>AK<br>
                        <input type="checkbox" value="RPL"   name="jurusan[]" <?php if(in_array('RPL',$dar)) echo 'checked';?>>RPL<br>
                        <input type="checkbox" value="TKJ"   name="jurusan[]"  <?php if(in_array('TKJ',$dar)) echo 'checked';?>>TKJ<br>
                        <input type="checkbox" value="MM"   name="jurusan[]"  <?php if(in_array('MM',$dar)) echo 'checked';?>>MM<br>
                        <input type="checkbox" value="TKR"   name="jurusan[]" <?php if(in_array('TKR',$dar)) echo 'checked';?>>TKR<br>
                        <input type="checkbox" value="TB"   name="jurusan[]" <?php if(in_array('TB',$dar)) echo 'checked';?>>TB<br>
</div>
</div>

<div class="form-group">
  <label for="exampleInputEmail1">Tingkat</label>
  <select class="form-select" name="kelas" aria-label="Default select example">
<option selected>{{ $data->kelas }}</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>

</select>

</div>



<div class="form-group">
  <label for="exampleInputEmail1">Jumlah Siswa</label>
  <input type="number" name="anak" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->anak }}">


</div>
<button type="submit" class="btn btn-outline-primary">Ubah</button>
</div>
</form>
       </div></div></div><div class="row"></div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body >

@endsection
@push('scripts')
