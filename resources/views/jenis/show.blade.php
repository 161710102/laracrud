@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-warning" href="{{ route('jenis.index') }}">
					  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div><div class="panel-heading"><h1>Data Jenis</h1>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Jenis Mobil</label>	
			  			<input type="text" name="jenis" class="form-control" value="{{ $jenis->jenis }}"  readonly>
			  		</div>
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection