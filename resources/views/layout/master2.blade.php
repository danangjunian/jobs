<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')  |  lawang - Lowongan Pekerjaan</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/orange.css" id="colors">
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
						<h1><a href="/home"><img src="images/awang.png" alt="Work Scout" /></a></h1>
					</div>
					<!-- Menu -->
					<nav id="navigation" class="menu">
						<ul id="responsive">
							<li><a href="/home" id="current">Home</a></li>
							<li><a href="#">Pages</a>
								<ul>
									<li><a href="job-page.html">Halaman Pekerjaan</a></li>
									{{-- <li><a href="job-page-alt.html">Job Page Alternative</a></li>
						<li><a href="resume-page.html">Resume Page</a></li>
						<li><a href="shortcodes.html">Shortcodes</a></li>
						<li><a href="pricing-tables.html">Pricing Tables</a></li>
						<li><a href="contact.html">Contact</a></li> --}}
								</ul>
							</li>
							<li><a href="#">Pelamar</a>
								<ul>
									<li><a href="browse-jobs.html">Pencarian kerja</a></li>
									{{-- <li><a href="browse-categories.html">Pencarian menurut kategori</a></li>
						<li><a href="add-resume.html">Tambah Resume</a></li>
						<li><a href="manage-resumes.html">Ubah Resume</a></li>
						<li><a href="job-alerts.html">Job Alerts</a></li> --}}
								</ul>
							</li>
							<li><a href="#">Perusahaan</a>
								<ul>
									<li><a href="add-job.html">Tambah pekerjaan</a></li>
									<li><a href="manage-jobs.html">Kelola pekerjaan</a></li>
									<li><a href="manage-applications.html">Kelola Applikasi</a></li>
									<li><a href="browse-resumes.html">Cari Resume</a></li>
								</ul>
							</li>

							<li><a href="blog.html">Blog</a></li>
						</ul>
						<ul class="float-right">
							<li><a href="/signup"><i class="fa fa-user"></i> Sign Up</a></li>
							<li><a href="/signin"><i class="fa fa-lock"></i> Log In</a></li>
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
			<h4>About</h4>
			<p>website Lawang menjadi salah satu solusi bagi perusahaan yang mencari tenaga kerja yang sesuai kemampuan, dan pencari kerja bisa memilih
				sesuai dengan fashionnya, jadi mulailah dengan langkah kecil, daftar sekarang dengan tombol di bawah.</p>
			<a href="#" class="button">Daftar Sekarang</a>
		</div>

		<div class="three columns">
			<h4>Company</h4>
			<ul class="footer-links">
				<li><a href="#">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="#">Our Blog</a></li>
				<li><a href="#">Terms of Service</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Hiring Hub</a></li>
			</ul>
		</div>
		
		<div class="three columns">
			<h4>Press</h4>
			<ul class="footer-links">
				<li><a href="#">In the News</a></li>
				<li><a href="#">Press Releases</a></li>
				<li><a href="#">Awards</a></li>
				<li><a href="#">Testimonials</a></li>
				<li><a href="#">Timeline</a></li>
			</ul>
		</div>		

		<div class="three columns">
			<h4>Browse</h4>
			<ul class="footer-links">
				<li><a href="#">Freelancers by Category</a></li>
				<li><a href="#">Freelancers in USA</a></li>
				<li><a href="#">Freelancers in UK</a></li>
				<li><a href="#">Freelancers in Canada</a></li>
				<li><a href="#">Freelancers in Australia</a></li>
				<li><a href="#">Find Jobs</a></li>

			</ul>
		</div>

	</div>

	<!-- Bottom -->
	<div class="container">
		<div class="footer-bottom">
			<div class="sixteen columns">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
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
<script src="scripts/jquery-2.1.3.min.js"></script>
<script src="scripts/custom.js"></script>
<script src="scripts/jquery.superfish.js"></script>
<script src="scripts/jquery.themepunch.tools.min.js"></script>
<script src="scripts/jquery.themepunch.revolution.min.js"></script>
<script src="scripts/jquery.themepunch.showbizpro.min.js"></script>
<script src="scripts/jquery.flexslider-min.js"></script>
<script src="scripts/chosen.jquery.min.js"></script>
<script src="scripts/jquery.magnific-popup.min.js"></script>
<script src="scripts/waypoints.min.js"></script>
<script src="scripts/jquery.counterup.min.js"></script>
<script src="scripts/jquery.jpanelmenu.js"></script>
<script src="scripts/stacktable.js"></script>






</body>
</html>