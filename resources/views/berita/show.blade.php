@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary"> 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('beritas.index') }}">
					  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>  
					</div><div class="panel-heading"><h1>Data Berita</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
					<div class="form-group">
			  			<label class="control-label">Tanggal Rilis Berita</label>	
			  			<input type="text" name="tgl_rilis" class="form-control" value="{{ $beritas->tgl_rilis }}"  readonly>
			  		</div>  

			  		<div class="form-group">
			  			<label class="control-label">Judul Berita</label>	
			  			<input type="text" name="judul" class="form-control" value="{{ $beritas->judul }}"  readonly>
					  </div>
					 
					<div class="form-group">
			  			<label class="control-label">Isi Berita</label>	
			  			<textarea cols="40" rows="5" name="isi" class="form-control" readonly>{{ $beritas->isi }}</textarea>
			  		</div>  
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection