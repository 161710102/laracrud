<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Jual Mobil</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/user/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <link rel="icon" href="BS/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="BS/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="BS/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="BS/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="BS/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <center>
	<body>
    <div class="navbar-wrapper">
      <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li class="active"><a class="btn btn-outline-success" href="{{ route('penjualan') }}">Home</a></li>
                	<li><a class="btn btn-outline-success" href="{{ route('beritas') }}">Berita</a></li>
                	<li><a class="btn btn-outline-primary" href="{{ route('juals') }}">Jual Mobil</a></li>
									<li><a class="btn btn-outline-primary" href="{{ route('jual') }}">Lihat Mobil</a></li>
					<li><a class="btn btn-outline-info" href="{{ route('jenis') }}">Jenis-Jenis Mobil</a></li>
					<li><a class="btn btn-outline-danger" href="{{ route('merks') }}">Merk Mobil</a></li>
						</ul>
						<div>
						<div>
                        <br><br><br><br>
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right">
			  	</div><div class="panel-heading"><h1><u>Data Merk</u><h1>
			  	</div>
			  </div>
        @include('pemudahijrah.file')
				<br>              
        <div class="panel-body">
				<div class="table-responsive">
				  <table class="table" id="myTable">
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
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($juals2 as $data)
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
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
<script src="BS/js/jquery.min.js"></script>
    <script src="BS/dist/js/bootstrap.min.js"></script>
    <script src="BS/assets/js/docs.min.js"></script>
    @include('layouts.icon')