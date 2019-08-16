<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

<head>
	<title>Dress</title>
</head>
<body>
	<div class="">
		<div class="panel-heading  py-2"  align="center"><h1>{{$judul}}</h1>
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

	</div>
	<div class="panel-body container-fluid">
	<br>

	<div class="container"> 
   <div class="row"> 
      <div class="col-sm">
      	@foreach ($dress as $row)
		
			<img src="hm.jpg" class="css-class"><br>
			{{ $row->nama_barang }}<br>
			{{ $row->jenis_produk }}
			{{ $row->color }}
			{{ $row->ukuran_produk }}
			{{ $row->stock }}
			{{ $row->deskripsi }}<br><br>

			<a  class="text-dark btn btn-info"> + Beli </a> <br><br>
		@endforeach

      </div>
   </div> 
	</div>
</div>
</div>

</body>
<div class="footer"align="center">
	<a class="text-dark" href="">&#169;andrereshnaf</a>
</div>