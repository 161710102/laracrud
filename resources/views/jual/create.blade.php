<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-warning" href="{{ route('juals.index') }}">
				  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div><div class="panel-heading"><h1>Data Jual</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  <form action="{{ url('admin/juals') }}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
				<div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Anda</label>	
			  			<input type="text" name="nama" class="form-control"  required>
			  			@if ($errors->has('nama'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nama') }}</strong>
                            </span>
                        @endif
					  </div>

				<div class="form-group {{ $errors->has('no_telp') ? ' has-error' : '' }}">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="number" name="no_telp" class="form-control"  required>
			  			@if ($errors->has('no_telp'))
                            <span class="help-block">
                                <strong>{{ $errors->first('no_telp') }}</strong>
                            </span>
                        @endif
					  </div>

				<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">E-Mail</label>	
			  			<input type="text" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
					  </div>

				<div class="form-group {{ $errors->has('mobil_id') ? ' has-error' : '' }}">
			  			<label class="control-label">Nama Mobil</label>	
			  			<select name="mobil_id" class="form-control">
			  				@foreach($mobils as $data)
			  				<option value="{{ $data->id }}">{{ $data->nama }}</option>
			  				@endforeach
			  			</select>
			  			@if ($errors->has('mobil_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mobil_id') }}</strong>
                            </span>
                        @endif
					  </div>	  

				<div class="form-group {{ $errors->has('tahun') ? ' has-error' : '' }}">
			  			<label class="control-label">Tahun</label>	
			  			<input type="date" name="tahun" class="form-control"  required>
			  			@if ($errors->has('tahun'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tahun') }}</strong>
                            </span>
                        @endif
					  </div>

				<div class="form-group {{ $errors->has('harga') ? ' has-error' : '' }}">
			  			<label class="control-label">Harga</label>	
			  			<input type="number" name="harga" class="form-control"  required>
			  			@if ($errors->has('harga'))
                            <span class="help-block">
                                <strong>{{ $errors->first('harga') }}</strong>
                            </span>
                        @endif
					  </div>		  	  	  	  

                <div class="form-group">
                    <label for="foto">foto</label><br>
                    <input type="file" id="foto" name="foto">
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