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
						<center>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/bm.png" width="1000" height="250" alt="Generic placeholder image"/></span>
						<h1>BantalMobil.id</h1>
						<h3><p>Selamat Datang Ingin Menjual Mobil??</p><h3>
                        <h4><p>Disini Tempatnya<br/><h4>
					</header>

                            @yield('content')    
				<!-- Footer -->
					<footer id="footer">
						<section>
						<ul class="icons">
								<li><a href="https://twitter.com/login?lang=id" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
								<li><a href="https://id-id.facebook.com/login/" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.instagram.com/accounts/login/?hl=id" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
								<li><a href="https://github.com/login" class="icon fa-github alt"><span class="label">GitHub</span></a></li>
								<li><a href="https://dribbble.com/session/new" class="icon fa-dribbble alt"><span class="label">Dribbble</span></a></li>
							</ul>
							</section>
  <p class="pull-right">
  &copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer>
			</div>
		<!-- Scripts -->
			<script src="assets/user/js/jquery.min.js"></script>
			<script src="assets/user/js/jquery.scrollex.min.js"></script>
			<script src="assets/user/js/jquery.scrolly.min.js"></script>
			<script src="assets/user/js/skel.min.js"></script>
			<script src="assets/user/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/user/js/main.js"></script>

	</body>
</html>