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
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  	<div class="panel-title pull-right">
			  	</div><div class="panel-heading"><h1>Data Jual</h1>
			  	</div>
			  </div>
			  <br>
			  <div class="panel-body">
			  <form action="{{ url('user/juals') }}" method="POST" enctype="multipart/form-data">
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
			  				@foreach($juals1 as $data)
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

                <div class="_m _6a"><a class="__9u __9t" rel="ignore"><div class="_3jk">
                <input accept="video/*,  video/x-m4v, video/webm, video/x-ms-wmv, video/x-msvideo, video/3gpp, video/flv, video/x-flv, video/mp4, video/quicktime, video/mpeg, video/ogv, .ts, .mkv, image/*" multiple="" name="composer_photo" title="Pilih file untuk diunggah" 
                data-testid="add-more-photos" display="inline-block" type="file" class="_n _5f0v" id="js_5y"></div></a></div>
										  
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
<script src="BS/js/jquery.min.js"></script>
    <script src="BS/dist/js/bootstrap.min.js"></script>
    <script src="BS/assets/js/docs.min.js"></script>
    @include('layouts.icon')