@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right"><a class="btn btn-outline-warning" href="{{ route('jenis.create') }}">
					<i class="fa fa-plus-square">&nbsp</i>Tambah</a>
			  	</div><div class="panel-heading"><h1>Data Jenis<h1>
			  </div>
				<br>
							  <div class="panel-body">
			  	<div class="table-responsive table--no-card m-b-40">
				  <table class="table table-borderless table-striped table-earning" id="myTable">
					<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>Jenis Mobil</th>
					  <th colspan="3"><center>Action</center></th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($jenis as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td>{{ $data->jenis }}</td>
<td>
	<a class="btn btn-outline-primary" href="{{ route('jenis.edit',$data->id) }}">
	<i class="fa fa-file-text">&nbsp</i>Edit</a>
</td>
<td>
	<a href="{{ route('jenis.show',$data->id) }}" class="btn btn-outline-success">
	<i class="fa fa-file-photo-o">&nbsp</i>Show</a>
</td>
<td>
	<form method="post" action="{{ route('jenis.destroy',$data->id) }}">
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