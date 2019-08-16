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
<form action="{{url('pembeli' , @$pembeli->id) }}" method="POST" >
	@csrf

      @if (!empty($pembeli))
            @method('PATCH')
      @endif
		<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                        	<tr>
                        		<h1>Form Pembeli </h1>
                        		<td>
                                    			<label>Nama Pelanggan </label> 
            	   								 <input type="text" class="col-sm-4 col-form-label col-form-label" name="nama_pelanggan" value="{{ old('nama_pelanggan' , @$pembeli->nama_pelanggan) }}">
                        		</td>
                        	</tr>
                        	<tr>
                        		<td>
                                          <label>Alamat Pelanggan</label> 
                                 <input type="text" class="col-sm-4 col-form-label col-form-label" name="alamat_lengkap" value="{{ old('alamat_lengkap' , @$pembeli->alamat_lengkap) }}">
                                    </td>
                        	</tr>
                        	<tr>
                        		<td>
                                          <label>No Telpon </label> 
                                 <input type="text" class="col-sm-4 col-form-label col-form-label" name="no_telp" value="{{ old('no_telp' , @$pembeli->no_telp) }}">
                                    </td>
                        	</tr>
                        	<tr>
                        		<td>
                                          <label>Kode Pos Pelanggan </label> 
                                 <input type="text" class="col-sm-4 col-form-label col-form-label" name="kode_pos_pelanggan" value="{{ old('kode_pos_pelanggan' , @$pembeli->kode_pos_pelanggan) }}">
                                    </td>
                        	</tr>
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
	
