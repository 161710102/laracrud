<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a class="btn btn-outline-success" href="{{ route('merks.index') }}">
				  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div><div class="panel-heading"><h1>Data Merk</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('merks.update',$merks->id) }}" method="post" enctype="multipart/form-data">
			  		<input name="_method" type="hidden" value="PATCH">
        			{{ csrf_field() }}
					<div class="form-group {{ $errors->has('logo') ? ' has-error' : '' }}">
			  			<label class="control-label">Logo</label>	
			  			<input type="file" name="logo" class="form-control" value="{{ $merks->logo }}">
						  @if ($errors->has('logo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('logo') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('merk') ? ' has-error' : '' }}">
			  			<label class="control-label">Merk Mobil</label>	
			  			<input type="text" name="merk" value="{{ $merks->merk }}" class="form-control"  required>
			  			@if ($errors->has('merk'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk') }}</strong>
                            </span>
                        @endif
					  </div>
					  
					<div class="form-group {{ $errors->has('deskripsi') ? ' has-error' : '' }}">
			  			<label class="control-label">Deskripsi</label>	
			  			<Textarea name="deskripsi" class="form-control"  required>{{ $merks->deskripsi }}</Textarea>
			  			@if ($errors->has('deskripsi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('deskripsi') }}</strong>
                            </span>
                        @endif
			  		</div>	    
			  		<div class="form-group">
			  			<button type="submit" class="btn btn-outline-primary">
						  <i class="fa fa-edit">&nbsp</i>Edit</button>
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