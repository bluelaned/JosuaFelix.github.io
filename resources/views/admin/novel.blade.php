@extends('index');
@section('content')

<div>
	<h3>Novel</h3>
	    <table class="table-bordered table">
            <thead >
            <tr>
                <th>No.</th>
                <th>Judul Buku</th>
                <th>Harga</th>
                <th>Penulis</th>
				<th>Action</th>
            </tr>
            </thead>
			<tbody >
				@php $no=1; @endphp
				@foreach ($novel as $n)
			<tr>
				<td>{{ $no++ }}</td>
				<td>{{ $n->judul }}</td>
				<td>{{ $n->harga }}</td>
				<td>{{ $n->penulis }}</td>
				<td>
					<a href="/admin/edit-novel/{{ $n->id }}"><i class="fa-solid fa-pen-to-square"></i> Edit </a> | 
					<a href="/admin/delete-novel/{{ $n->id }}"><i class="fa-solid fa-trash-can"></i> Delete </a>
				</td>
			</tr>
				@endforeach
			</tbody>
		</table>

</div>          
@endsection