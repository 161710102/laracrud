@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-warning" href="{{ route('mobils.index') }}">
				  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div><div class="panel-heading"><h1>Data Mobil</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  <form action="{{ url('mobils.store') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
                <div class="form-group">
                    <label for="gambar">Gambar Mobil</label><br>
                    <input type="file" id="gambar" name="gambar" placeholder="Judul Gambar">
                </div>

					<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('merk_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Merk Mobil</label>	
			  			<select name="merk_id" class="form-control">
			  			</select>
			  			@if ($errors->has('merk_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('merk_id') }}</strong>
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