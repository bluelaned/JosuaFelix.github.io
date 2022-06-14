@extends('index')

@section('content')
<div class="card mt-4 mb-4">
  <div class="card-body">
    <div class="row">
      <div class="col-md">
        <h1 class="text-center h5">Edit Data</h1>
      </div>
    </div>

    <div class="row">
      <div class="col-md">
        <form action="/admin/update-guru/{{ $guru->id }}" method="post">
          @csrf
          <div class="form-group">
            <label for="kdguru">Masukkan Kode Guru :</label>
            <input type="text" name="ikode_guru" class="form-control" value="{{$guru->kdguru}}">
          </div>

          <div class="form-group">
            <label for="harga">Nama :</label>
            <input type="text" name="inama" class="form-control" value="{{$guru->nama}}">
          </div>

          <div class="form-group">
            <label for="penulis">Tempat Lahir :</label>
            <input type="text" name="itmp" class="form-control" value="{{$guru->tmp_lahir}}">
          </div>

          <div class="form-group">
            <label for="penulis">Tanggal Lahir :</label>
            <input type="text" name="itgl" class="form-control" value="{{$guru->tal_lahir}}">
          </div>

          <div class="form-group">
            <label for="penulis">Alamat :</label>
            <input type="text" name="ialamat" class="form-control" value="{{$guru->alamat}}">
          </div> 

          <div class="form-group">
            <label for="penulis">No Hp :</label>
            <input type="text" name="inohp" class="form-control" value="{{$guru->nohp}}">
          </div>

          <div class="form-group">
            <label for="penulis">Email :</label>
            <input type="text" name="iemail" class="form-control" value="{{$guru->email}}">
          </div>

          <div class="form-group">
            <button type="submit"  class="btn btn-success btn-info">Ubah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection