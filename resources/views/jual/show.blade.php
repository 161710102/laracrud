<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary"> 
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('juals.index') }}">
					  <i class="fa fa-chevron-circle-left">&nbsp</i>Kembali</a>  
					</div><div class="panel-heading"><h1>Data Jual</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
        			<div class="form-group">
			  			<label class="control-label">Nama Anda</label>	
			  			<input type="text" name="nama" class="form-control" value="{{ $juals->nama }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">No Telepon</label>	
			  			<input type="text" name="no_telp" class="form-control" value="{{ $juals->no_telp }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">E-Mail</label>	
			  			<input type="text" name="email" class="form-control" value="{{ $juals->email }}"  readonly>
			  		</div>    

			  		<div class="form-group">
			  			<label class="control-label">Merk Mobil</label>	
			  			<input type="text" name="mobil_id" class="form-control" value="{{ $juals->Mobil->nama }}"  readonly>
					  </div>

					<div class="form-group">
			  			<label class="control-label">Tahun</label>	
			  			<input type="date" name="tahun" class="form-control" value="{{ $juals->tahun }}"  readonly>
			  		</div>

					<div class="form-group">
			  			<label class="control-label">Harga</label>	
			  			<input type="number" name="harga" class="form-control" value="{{ $juals->harga }}"  readonly>
			  		</div>  

					<div class="form-group">
			  			<label class="control-label">Foto</label>
						<input type="text" name="foto" class="form-control" value="{{ $juals->foto }}"  readonly>
						@if(isset($juals)&& $juals->foto)
						  <p>
						  <img src="{{asset('img/'.$juals->foto)}}" width="500" height="500">
						  </p>@endif
			  		</div>
					   
					<div class="form-group">
			  			<label class="control-label">Deskripsi</label>	
			  			<textarea cols="40" rows="5" name="deskripsi" class="form-control" readonly>{{ $juals->deskripsi }}</textarea>
			  		</div>  
			  	</div>
			</div>	
		</div>
	</div>
</div>
@endsection