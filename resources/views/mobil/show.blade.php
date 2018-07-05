@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Show Data Mobil
			  	<div class="panel-title pull-right"><a href="{{ route('mobils.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobils->nama }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Model</label>	
			  			<input type="text" name="model" class="form-control" value="{{ $mobils->model }}"  
			  			readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Spesifikasi</label>	
			  			<input type="text" name="spesifikasi" class="form-control" value="{{ $mobils->spesifikasi }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Engine</label>	
			  			<input type="text" name="engine" class="form-control" value="{{ $mobils->engine }}"  readonly>
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $mobils->harga }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection