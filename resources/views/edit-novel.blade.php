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
        <form action="/admin/update-novel/{{ $novel->id }}" method="post">
          @csrf
          <div class="form-group">
            <label for="judul">Masukkan Judul Buku :</label>
            <input type="text" name="ijudul_buku" class="form-control" value="{{$novel->judul}}">
          </div>

          <div class="form-group">
            <label for="harga">Harga :</label>
            <input type="text" name="iharga" class="form-control" value="{{$novel->harga}}">
          </div>

          <div class="form-group">
            <label for="penulis">Penulis :</label>
            <input type="text" name="ipenulis" class="form-control" value="{{$novel->penulis}}">
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