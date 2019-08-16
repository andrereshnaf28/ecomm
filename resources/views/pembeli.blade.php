<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<head>
	<title>Dress</title>
</head>
<body>
	<div class="">
		<div class="panel-heading  py-2"  align="center"><h1>{{$judul}}</h1>
		<p>Belajar PHP. Halaman dari controllers. </p>

		@if(session('success'))
		<div class="alert alert-success">
			{{ session('success') }}
		</div>
		@endif

		@if(session('error'))
		<div class="alert alert-error">
			{{ session('error') }}
		</div>
		@endif

		<a href="{{ url('/pembeli/create')}}" class="text-dark btn btn-info"> + Tambah Data</a> <br><br>

		<nav class="site-header sticky-top py-2 navbar-dark bg-dark">
      <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block text-light" href="/dress-fresh/public/dress">Table Dress</a>
        <a class="py-2 d-none d-md-inline-block text-light" href="/dress-fresh/public/pembeli">Table Pembeli</a>
      </div>
    </nav>

	</div>
	<div class="panel-body container-fluid">
	<br>
	<table border="1" align="center" class="table table-dark ">
		<tr bgcolor="#00cec9">
			<th>No</th>
			<th>Nama Pelanggan</th>
			<th>Alamat Lengkap</th>
			<th>No Telpon</th>
			<th>Kode Pos Pelanggan</th>
			<th>Aksi</th>

		</tr>
		@foreach ($pembeli as $row)
		<tr>
			<td>{{ isset($i) ? ++$i : $i = 1 }}</td>
			<td>{{ $row->nama_pelanggan }}</td>
			<td>{{ $row->alamat_lengkap }}</td>
			<td>{{ $row->no_telp }}</td>
			<td>{{ $row->kode_pos_pelanggan }}</td>
			<td align="center">
				<a href="{{ url ('/pembeli/' . $row->id. '/edit')}}" class="btn btn-outline-warning">Edit</a>
				<form action="{{ url ('/pembeli/' . $row->id )}}" method="POST"">
					@method('DELETE')
					@csrf
					<button class="btn btn-outline-danger" type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach

	</table>
</div>
</div>

</body>
<div class="footer"align="center">
	<a class="text-dark" href="">&#169;andrereshnaf</a>
</div>


