<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary"> 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('mobils.index') }}">
					  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>  
					</div><div class="panel-heading"><h1>Data Merk</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  		<div class="form-group">
			  			<label class="control-label">Gambar Mobil</label>
						<input type="text" name="gambar" class="form-control" value="{{ $mobils->gambar }}"  readonly>
						@if(isset($mobils)&& $mobils->gambar)
						  <p>
						  <img src="{{asset('img/'.$mobils->gambar)}}" width="500" height="500">
						  </p>@endif
			  		</div>

			  		<div class="form-group">
			  			<label class="control-label">merk Mobil</label>	
			  			<input type="text" name="merk_id" class="form-control" value="{{ $mobils->Merk->merk }}"  readonly>
					  </div>
					 
					<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<textarea cols="40" rows="5" name="deskripsi" class="form-control" readonly>{{ $mobils->deskripsi }}</textarea>
			  		</div>  
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection