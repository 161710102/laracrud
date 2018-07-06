@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a <a class="btn btn-outline-warning" href="{{ route('beritas.index') }}">
				  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>
			  	</div><div class="panel-heading"><h1>Data Berita</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  	<form action="{{ route('beritas.store') }}" method="post" >
					  {{ csrf_field() }}
					<div class="form-group {{ $errors->has('gambar') ? ' has-error' : '' }}">
			  			<label class="control-label">Gambar Berita</label>	
			  			<input type="file" name="gambar" class="form-control"  required>
			  			@if ($errors->has('gambar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gambar') }}</strong>
                            </span>
                        @endif
					  </div>

			  		<div class="form-group {{ $errors->has('tgl_rilis') ? ' has-error' : '' }}">
			  			<label class="control-label">Tanggal Rilis Berita</label>	
			  			<input type="date" name="tgl_rilis" class="form-control"  required>
			  			@if ($errors->has('tgl_rilis'))
                            <span class="help-block">
                                <strong>{{ $errors->first('tgl_rilis') }}</strong>
                            </span>
                        @endif
					  </div>

					<div class="form-group {{ $errors->has('judul') ? ' has-error' : '' }}">
			  			<label class="control-label">Judul Berita</label>	
			  			<input type="text" name="judul" class="form-control"  required>
			  			@if ($errors->has('judul'))
                            <span class="help-block">
                                <strong>{{ $errors->first('judul') }}</strong>
                            </span>
                        @endif
					  </div>  
										  
					<div class="form-group {{ $errors->has('isi') ? ' has-error' : '' }}">
			  			<label class="control-label">Isi Berita</label>	
			  			<Textarea name="isi" class="form-control"  required></Textarea>
			  			@if ($errors->has('isi'))
                            <span class="help-block">
                                <strong>{{ $errors->first('isi') }}</strong>
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