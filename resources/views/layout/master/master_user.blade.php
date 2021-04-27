<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')  |  Lawang - Lowongan Pekerjaan</title>
	<link rel="icon" type="image/png" href="/images/logo.png"/>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/colors/blue.css" id="colors">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
    
</head>

<body>
	<div id="wrapper">
		<!-- Header
================================================== -->

<header>
	<div class="container">
		<div class="sixteen columns">
			<!-- Logo -->
			<div id="logo">
				<h1><a href="/homepage_user"><img src="/images/awang.png" alt="lawang" /></a></h1>
			</div>
			<!-- Menu -->
			<nav id="navigation" class="menu">
				<ul id="responsive">
							<li><a href="/tambah/pekerjaan">Tambah pekerjaan</a></li>
							<li><a href="/kelola-jobs">Kelola pekerjaan</a></li>
							<li><a href="/atur-aplikasi">Kelola Applikasi</a></li>
							<li><a href="/cari-resume">Cari Resume</a></li>
							{{--  <li><a href="/halaman_kerja/{id}">Postingan Kerja</a></li>  --}}
				</ul>
				<ul class="float-right">
					<li style=" margin-right: 20px;"> <a href="#"> <i class="fa fa-user"></i> Admin</a>
					<ul>
						<li>
							<li><a href="/"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
						</li>
					</ul>
					
					</li>
					
				</ul>

			</nav>

			<!-- Navigation -->
			<div id="mobile-navigation">
				<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>


		<!-- Content
================================================== -->

@yield('content')

	
<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>Tentang kami</h4>
			<p>website Lawang menjadi salah satu solusi bagi perusahaan yang mencari tenaga kerja yang sesuai kemampuan, dan pencari kerja bisa memilih
				sesuai dengan fashionnya, jadi mulailah dengan langkah kecil, daftar sekarang dengan tombol di bawah.</p>
			<a href="/daftar-awal" class="button">Daftar Sekarang</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">Tentang</a></li>
				<li><a href="/daftar-awal">karir</a></li>
				<li><a href="/blog-awal">Blog</a></li>
			</ul>
		</div>
		
	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="https://www.facebook.com/JobStreetIndonesia/"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="https://twitter.com/jobstreetcom"><i class="icon-twitter"></i></a></li>
					<li><a class="linkedin" href="https://www.linkedin.com/company/jobstreet.co.id/"><i class="icon-linkedin"></i></a></li>
				</ul>
				<div class="copyrights">©  Copyright 2021 by <a href="#">Lawang</a>. All Rights Reserved.</div>
			</div>
		</div>
	</div>

</div>

<!-- Back To Top Button -->
<div id="backtotop"><a href="#"></a></div>

</div>
<!-- Wrapper / End -->


<!-- Scripts
================================================== -->
<script src="{{asset('scripts/jquery-2.1.3.min.js')}}"></script>
<script src="{{asset('scripts/custom.js')}}"></script>
<script src="{{asset('scripts/jquery.superfish.js')}}"></script>
<script src="{{asset('scripts/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('scripts/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('scripts/jquery.themepunch.showbizpro.min.js')}}"></script>
<script src="{{asset('scripts/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('scripts/chosen.jquery.min.js')}}"></script>
<script src="{{asset('scripts/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('scripts/waypoints.min.js')}}"></script>
<script src="{{asset('scripts/jquery.counterup.min.js')}}"></script>
<script src="{{asset('scripts/jquery.jpanelmenu.js')}}"></script>
<script src="{{asset('scripts/stacktable.js')}}"></script>

{{Debugbar::info(asset('scripts/stacktable.js'))}}






</body>
</html>