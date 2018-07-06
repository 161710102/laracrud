@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-warning" href="{{ route('merks.index') }}">
				  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div><div class="panel-heading"><h1>Data Berita</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('merks.store') }}" method="post" >
					  {{ csrf_field() }}
					<div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
			  			<label class="control-label">Logo</label>	
			  			<input type="file" name="logo" class="form-control"  required>
			  			@if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
					  </div>

			  		<div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Merk</label>	
			  			<input type="text" name="merk" class="form-control"  required>
			  			@if ($errors->has('merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk') }}</strong>
                            </span>
                        @endif
					  </div>

					<div class="form-group {{ $errors->has('jenis_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Id Jenis</label>	
			  			<input type="text" name="jenis_id" class="form-control"  required>
			  			@if ($errors->has('jenis_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jenis_id') }}</strong>
                            </span>
                        @endif
					  </div>  
										  
					<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<Textarea name="deskripsi" class="form-control"  required></Textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>    
			  		<div class="form-group">
						  <button type="submit" class="btn btn-outline-primary">
						  <i class="fa fa-save">&nbsp</i>Tambah</button>
						  <button type="reset" class="btn btn-outline-success">
						  <i class="fa fa-refresh fa-spin"></i>&nbsp ulangi</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection