<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


@if(session('error'))
<div class="alert alert-error">
	{{session(error)}}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
	<strong>Perhatian</strong>
	<br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</ul>
</div>
@endif
<div class="panel-body container-fluid" align="center">

<br>
<form action="{{url('dress' , @$dress->id) }}" method="POST" >
	@csrf

      @if (!empty($dress))
            @method('PATCH')
      @endif
		<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                        	<tr>
                        		<h1>Form Dress </h1>
                        		<td>
                        			<label>Nama Barang: </label> 
	   								 <input type="text" class="col-sm-4 col-form-label col-form-label" name="nama_barang" value="{{ old('nama_barang' , @$dress->nama_barang) }}">
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>
                                          <label>Jenis Produk: </label> 
                                                       <input type="text" class="col-sm-4 col-form-label col-form-label" name="jenis_produk" value="{{ old('jenis_produk' , @$dress->jenis_produk) }}">
                                    </td>
                        	</tr>
                        	<tr>
                        		<td>
                                          <label>Color: </label> 
                                                       <input type="text" class="col-sm-4 col-form-label col-form-label" name="color" value="{{ old('color' , @$dress->color) }}">
                                    </td>
                        	</tr>
                        	<tr>
                        		<td>
                                          <label>Ukuran Produk: </label> 
                                                       <input type="text" class="col-sm-4 col-form-label col-form-label" name="ukuran_produk" value="{{ old('ukuran_produk' , @$dress->ukuran_produk) }}">
                                    </td>
                        	</tr>
                        	<tr>
                              <tr>
                                    <td>
                                          <label>Stock: </label> 
                                                       <input type="text" class="col-sm-4 col-form-label col-form-label" name="stock" value="{{ old('stock' , @$dress->stock) }}">
                                    </td>
                              </tr>
                              <tr>
                          <tr>
                              <tr>
                                    <td>
                                          <label>Deskripsi: </label> 
                                                       <input type="text" class="col-sm-4 col-form-label col-form-label" name="deskripsi" value="{{ old('deskripsi' , @$dress->deskripsi) }}">
                                    </td>
                              </tr>
                              <tr>
                        		<td align="center">
                        			<input type="submit" value="Simpan" class="btn btn-primary">
                        		</td>
                        		
                        	</tr>
		    
			                   </div>
	                </div>
	            </div>
	        </div>
	    </div>

	    	

</form>
</div>
	
