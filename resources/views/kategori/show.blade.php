@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Kategori
			  	<div class="panel-title pull-right"><a href="{{ route('kategoris.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $kategoris->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Model</label>	
			  			<input type="text" name="deskripsi" class="form-control" value="{{ $kategoris->deskripsi }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Spesifikasi</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $kategoris->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection