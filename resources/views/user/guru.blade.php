<!doctype html>
<html lang="en">
  <head>
  	<title>TABLE GURU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="{{ asset('layout_user/css/style.css') }}">
	<style>
	.navbar-nav{
		
		margin: auto;
	}
</style>
	</head>
<body>
	<nav class="navbar navbar-expand-lg">
  		<div class="collapse navbar-collapse" id="navbarNav">
    		<ul class="navbar-nav">
      			<li class="nav-item active">
	        		<a class="nav-link" href="{{ asset('user/novel') }}">NOVEL</a>
      			</li>
				<li class="nav-item active">
	        		<a class="nav-link" href="{{ asset('user/guru') }}">GURU</a>
      			</li>
    		</ul>
  		</div>
	</nav>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">DATA Guru</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
						      <th>Kode Guru</th>
						      <th>Nama</th>
						      <th>Tempat Lahir</th>
						      <th>Tanggal Lahir</th>
							  <th>Alamat</th>
							  <th>No HP</th>
							  <th>Email</th>
						    </tr>
						  </thead>
							@php $go=1; @endphp
							@foreach ($users as $user)
						  <tbody>
						    <tr>
								<td>{{ $user->kdguru }}</td>
								<td>{{ $user->nama }}</td>
								<td>{{ $user->tmp_lahir }}</td>
								<td>{{ $user->tal_lahir }}</td>
								<td>{{ $user->alamat }}</td>
								<td>{{ $user->nohp }}</td>
								<td>{{ $user->email }}</td>
						    </tr>
						    @endforeach
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('layout_user/js/jquery.min.js') }}"></script>
  <script src="{{ asset('layout_user/js/popper.js') }}"></script>
  <script src="{{ asset('layout_user/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('layout_user/js/main.js') }}"></script>

	</body>
</html>

