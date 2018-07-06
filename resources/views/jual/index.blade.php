<br><br><br><br>
@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('juals.create') }}">
					<i class="fa fa-plus-square">&nbsp</i>Tambah</a>
			  	</div><div class="panel-heading"><h1>Data Jual<h1>
			  	</div>
			  </div>
				<br>
			  <div class="panel-body">
				<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borderless table-striped table-earning">
				  	<thead>
			  		<tr>
							<th>No</th>
						<th>Nama Anda</th>
						<th>No Telepon</th>
						<th>E-Mail</th>
						<th>Merk Mobil</th>
						<th>Tahun</th>
						<th>Harga</th>
						<th>Foto</th>
						<th>Deskripsi</th>
					  <th colspan="3"><center>Action</center></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($juals as $data)
				  	  <tr>
							<td>{{ $no++ }}</td>
							<td>{{ $data->nama }}</td>
							<td>{{ $data->no_telp }}</td>
							<td>{{ $data->email }}</td>
							<td><p>{{ $data->Mobil->nama }}</p></td>
							<td>{{ $data->tahun }}</td>
							<td>{{ $data->harga }}</td>
							<td><p><a href="" class="thumbnail">
                  <img src="../img/{{ $data->foto }}"></p></td>
							<td><textarea cols="40" rows="5">{{ $data->deskripsi }} </textarea></td>
							</tr>
							<td>
	<a class="btn btn-outline-primary" href="{{ route('juals.edit',$data->id) }}">
	<i class="fa fa-file-text">&nbsp</i>Edit</a>
</td>
<td>
	<a href="{{ route('juals.show',$data->id) }}" class="btn btn-outline-success">
	<i class="fa fa-file-photo-o">&nbsp</i>Show</a>
</td>
<td>
	<form method="post" action="{{ route('juals.destroy',$data->id) }}">
		<input name="_token" type="hidden" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">

		<button type="submit" class="btn btn-outline-danger">
		<i class="fa fa-remove">&nbsp</i>Delete</button>
	</form>
</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection