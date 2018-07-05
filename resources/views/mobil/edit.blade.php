@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">Edit Data Mobil 
			  	<div class="panel-title pull-right"><a href="{{ route('mobils.index') }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('mobils.update',$mobils->id) }}" method="post" >
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $mobils->nama }}"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('model') ? ' has-error' : '' }}">
			  			<label class="control-label">Model</label>	
			  			<input type="text" name="model" class="form-control" value="{{ $mobils->model }}"  
			  			required>
			  			@if ($errors->has('model'))
                            <span class="help-block">
                                <strong>{{ $errors->first('model') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('spesifikasi') ? ' has-error' : '' }}">
			  			<label class="control-label">Spesifikasi</label>	
			  			<input type="text" name="spesifikasi" class="form-control" value="{{ $mobils->spesifikasi }}"  required>
			  			@if ($errors->has('spesifikasi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('spesifikasi') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('engine') ? ' has-error' : '' }}">
			  			<label class="control-label">Engine</label>	
			  			<input type="text" name="engine" class="form-control" value="{{ $mobils->engine }}"  required>
			  			@if ($errors->has('engine'))
                            <span class="help-block">
                                <strong>{{ $errors->first('engine') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="text" name="harga" class="form-control" value="{{ $mobils->harga }}"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
			  		</div>
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Edit</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection