@extends('layout.admin')

@section('content')




<h1 class="text-center mb-5">Ubah Data Sekolah</h1>
  <div class="container" >
      <div class="row justify-content-center" >
       <div class="col-8">
<div>
<div>
<form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data" >
 @csrf

<div class="form-group">
  <label for="exampleInputEmail1">NIS</label>
  <input type="number" name="npsn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->npsn }}">

</div>
<div class="form-group">
  <label for="exampleInputEmail1">Nama Siswa</label>
  <input type="text" name= "namasekolah" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->namasekolah }}">

</div>
<div class="form-group">
  <label for="exampleInputEmail1">Tingkat</label>
  <select class="form-select" name="tingkat" aria-label="Default select example">
<option selected>{{ $data->tingkat }}</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>

</select>

</div>

<div class="form-group">
  <label for="exampleInputEmail1">Status</label>
    <div class="custom-control custom-radio">

<input type="radio" id="option1" name="status"  value="Laki-laki" <?php if($data["status"]== "Laki-laki")  echo 'checked';?>>Laki-laki<br>
<input type="radio" id="option2" name="status" value="Perempuan"  <?php if($data["status"]== "Perempuan") echo 'checked';?>>Perempuan<br>
</div>
</div>

<div class="form-group">

<label for="exampleInputEmail1"class="form-label"   class="form-control" >Jurusan</label>

  <?php $dar = explode (',', $data-> jurusan)?><br>
  <input type="checkbox" value="AK"   name="jurusan[]" <?php if(in_array('AK',$dar)) echo 'checked';?>>AK<br>
<input type="checkbox" value="RPL"   name="jurusan[]" <?php if(in_array('RPL',$dar)) echo 'checked';?>>RPL<br>
<input type="checkbox" value="TKJ"   name="jurusan[]"  <?php if(in_array('TKJ',$dar)) echo 'checked';?>>TKJ<br>
<input type="checkbox" value="MM"   name="jurusan[]"  <?php if(in_array('MM',$dar)) echo 'checked';?>>MM<br>
<input type="checkbox" value="TKR"   name="jurusan[]" <?php if(in_array('TKR',$dar)) echo 'checked';?>>TKR<br>
<input type="checkbox" value="TB"   name="jurusan[]" <?php if(in_array('TB',$dar)) echo 'checked';?>>TB<br>
</div>
</div>



<div class="form-group">
  <label for="exampleInputEmail1">Update Foto</label>
  <img class="img mb-3" src="{{ asset('logosekolah/'. $data->logo) }}" alt="" style="width: 60px;">
  <input type="file" name="logo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->logo}}">
</div>

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
