@extends('index');
@section('content')
<style>
h3{
	float:left;
}
#button{
	float:right;
}

.modal-body{
	width: 500px;
}
/* untuk scroll */
.scroll{
	overflow-x: auto;
}


</style>

<div class="scroll">
	<h3>Data Guru</h3>
	<button id="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Create</button>
        <!-- Modal -->
	    <table class="table-bordered table">
            <thead>
            <tr>
                <!-- <th>No.</th> -->
                <th>Kode Guru</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Email</th>
				<th>Action</th>
            </tr>
            </thead>
			<tbody >
				@php $go=1; @endphp
				@foreach ($guru as $g)
			<tr>
				<td>{{ $g->kdguru }}</td>
				<td>{{ $g->nama }}</td>
				<td>{{ $g->tmp_lahir }}</td>
				<td>{{ $g->tal_lahir }}</td>
				<td>{{ $g->alamat }}</td>
				<td>{{ $g->nohp }}</td>
				<td>{{ $g->email }}</td>
				<td>
					<a href="/admin/edit-guru/{{ $g->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit </a> | 
					<a href="/admin/delete-guru/{{ $g->id }}"><i class="fa-solid fa-trash-can"></i> Delete </a>
				</td>
			</tr>
				@endforeach
			</tbody>
		</table>
</div>          
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Data Guru :</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
                </button>
            </div>
        	<div class="modal-body">
				<div class="row">
      				<div class="col-md">
						<!-- Untuk menginputkan data ke database hanya perlu perhatikan "name" -->
        				<form action="{{ url('admin/guru') }}" method="post">
          					@csrf
							<div class="form-group">
								<label for="kdguru">Masukkan Kode Guru</label>
								<input type="text" name="kode_guru" id="kdguru" class="form-control" value="{{ old('kdguru') }}">
								<p class="text-danger">{{ $errors->first('kodeguru') }}</p>
							</div>

							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama') }}">
								<p class="text-danger">{{ $errors->first('nama') }}</p>
							</div>

							<div class="form-group">
								<label for="tempatlahir">Tempat Lahir</label>
								<input type="text" name="tempat_lahir" id="tempatlahir" class="form-control" value="{{ old('tempatlahir') }}">
								<p class="text-danger">{{ $errors->first('tempatlahir') }}</p>
							</div>

							<div class="form-group">
								<label for="tanggallahir">Tanggal Lahir</label>
								<input type="text" name="tanggal_lahir" id="tanggallahir" class="form-control" value="{{ old('tanggallahir') }}">
								<p class="text-danger">{{ $errors->first('tanggallahir') }}</p>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" name="alamat" id="alamat" class="form-control" value="{{ old('alamat') }}">
								<p class="text-danger">{{ $errors->first('alamat') }}</p>
							</div>

							<div class="form-group">
								<label for="nohp">No HP</label>
								<input type="text" name="nohp" id="nohp" class="form-control" value="{{ old('nohp') }}">
								<p class="text-danger">{{ $errors->first('nohp') }}</p>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
								<p class="text-danger">{{ $errors->first('email') }}</p>
							</div>
				
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-success btn-info">Save changes</button>
							</div>
    					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection