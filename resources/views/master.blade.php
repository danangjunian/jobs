<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

	<!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">

	<title>Lawang</title>
	<link rel="icon" href="" type="image/gif">

	<!-- Mobile Specific Metas
================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
================================================== -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/blue.css" id="colors">

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

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
						<h1><a href="index.html"><img src="images/logo.png" alt="Work Scout" /></a></h1>
					</div>

					<!-- Menu -->
					<nav id="navigation" class="menu">
						<ul id="responsive">

							<li><a href="index.html" id="current">Home</a>
								<ul>
									{{-- <li><a href="index.html">Home #1</a></li>
						<li><a href="index-2.html">Home #2</a></li>
						<li><a href="index-3.html">Home #3</a></li>
						<li><a href="index-4.html">Home #4</a></li> --}}
								</ul>
							</li>

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
							<li><a href="/signin"><i class="fa fa-user"></i> Sign Up</a></li>
							<li><a href="/signup"><i class="fa fa-lock"></i> Log In</a></li>
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


		<!-- Banner
================================================== -->
		<div id="banner" style="background: url(images/banner-home-01.jpg)">
			<div class="container">
				<div class="sixteen columns">

					<div class="search-container">

						<!-- Form -->
						<h2>Cari pekerjaan anda sekarang </h2>
						<input type="text" class="ico-01" placeholder="Judul pekerjaan, posisi pekerjaan, perusahaan "
							value="" />
						<input type="text" class="ico-02" placeholder="Kota, provinsi" value="" />
						<button><i class="fa fa-search"></i></button>

						<!-- Browse Jobs -->
						<div class="browse-jobs">
							Cari pekerjaan sesuai dengan <a href="browse-categories.html"> Kategori</a> atau <a
								href="#">Lokasi</a>
						</div>

						<!-- Announce -->
						<div class="announce">
							Membuka lowongan pekerjaan <strong>15.000</strong> menuju Indonesia Generasi Emas 2045!
						</div>

					</div>

				</div>
			</div>
		</div>


		<!-- Content
================================================== -->

		<!-- Categories -->
		<div class="container">
			<div class="sixteen columns">
				<h3 class="margin-bottom-25">Kategori Populer</h3>
				<ul id="popular-categories">
					<li><a href="#"><i class="fa fa-line-chart"></i> Akuntansi / Keuangan</a></li>
					<li><a href="#"><i class="fa fa-wrench"></i> Mekanik / Otomotive</a></li>
					<li><a href="#"><i class="fa fa-building-o"></i> K3 / HSE </a></li>
					<li><a href="#"><i class="fa fa-graduation-cap"></i> Pendidikan </a></li>
					<li><a href="#"><i class="fa fa-medkit"></i> Kesehatan</a></li>
					<li><a href="#"><i class="fa fa-cutlery"></i> Restoran / Pelayan Restoran</a></li>
					<li><a href="#"><i class="fa fa-globe"></i> Transportasi / Logistik</a></li>
					<li><a href="#"><i class="fa fa-laptop"></i> telekomukiasi / Ilmu Teknologi</a></li>
				</ul>

				<div class="clearfix"></div>
				<div class="margin-top-30"></div>

				<a href="browse-categories.html" class="button centered">Cari semua kategori</a>
				<div class="margin-bottom-50"></div>
			</div>
		</div>



		<div class="container">

			<!-- Recent Jobs -->
			<div class="eleven columns">
				<div class="padding-right">
					<h3 class="margin-bottom-25">Pekerjaan Terbaru</h3>
					<ul class="job-list">

						<li class="highlighted"><a href="job-page.html">
								<img src="images/job-list-logo-01.png" alt="">
								<div class="job-list-content">
									<h4>Marketing Coordinator - SEO / SEM Experience <span
											class="full-time">Full-Time</span></h4>
									<div class="job-icons">
										<span><i class="fa fa-briefcase"></i> PT Bintang Timur</span>
										<span><i class="fa fa-map-marker"></i> Surabaya</span>
										<span><i class="fa fa-money"></i> 4200.000 / bulan</span>
									</div>
								</div>
							</a>
							<div class="clearfix"></div>
						</li>

						<li><a href="job-page.html">
								<img src="images/job-list-logo-02.png" alt="">
								<div class="job-list-content">
									<h4>PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
									<div class="job-icons">
										<span><i class="fa fa-briefcase"></i> PT. itech</span>
										<span><i class="fa fa-map-marker"></i> Lamongan</span>
										<span><i class="fa fa-money"></i> 5000.000 / bulan</span>
									</div>
								</div>
							</a>
							<div class="clearfix"></div>
						</li>

						<li><a href="job-page.html">
								<img src="images/job-list-logo-03.png" alt="">
								<div class="job-list-content">
									<h4>Restaurant Team Member <span class="full-time">Full-Time</span></h4>
									<div class="job-icons">
										<span><i class="fa fa-briefcase"></i> Mcd sidoarjo</span>
										<span><i class="fa fa-map-marker"></i> Sidoarjo</span>
										<span><i class="fa fa-money"></i> 4200.000 / bulan</span>
									</div>
								</div>
							</a>
							<div class="clearfix"></div>
						</li>

						<li><a href="job-page.html">
								<img src="images/job-list-logo-04.png" alt="">
								<div class="job-list-content">
									<h4>Designer <span class="internship">Internship</span></h4>
									<div class="job-icons">
										<span><i class="fa fa-briefcase"></i> Lola Boutique</span>
										<span><i class="fa fa-map-marker"></i> Surabaya</span>
										<span><i class="fa fa-money"></i> 500.000 / content</span>
									</div>
								</div>
							</a>
							<div class="clearfix"></div>
						</li>

						<li><a href="job-page.html">
								<img src="images/job-list-logo-05.png" alt="">
								<div class="job-list-content">
									<h4>Android Music App Development <span class="temporary">Temporary</span></h4>
									<div class="job-icons">
										<span><i class="fa fa-briefcase"></i> PT Rans Entertaiment</span>
										<span><i class="fa fa-map-marker"></i> Jakarta</span>
										<span><i class="fa fa-money"></i> 6500.000 / bulan</span>
									</div>
								</div>
							</a>
							<div class="clearfix"></div>
						</li>
					</ul>

					<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Tampilkan pekerjaan lainnya</a>
					<div class="margin-bottom-55"></div>
				</div>
			</div>



			<!-- Job Spotlight -->
			<div class="five columns">
				<h3 class="margin-bottom-5">Pekerjaan di butuhkan</h3>


				<!-- Navigation -->
				<div class="showbiz-navigation">
					<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
					<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
				</div>
				<div class="clearfix"></div>

				<!-- Showbiz Container -->
				<div id="job-spotlight" class="showbiz-container">
					<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1"
						data-play="#showbiz_play_1">
						<div class="overflowholder">

							<ul>

								<li>
									<div class="job-spotlight">
										<a href="#">
											<h4>Social Media <span
													class="part-time">Part-Time</span></h4>
										</a>
										<span><i class="fa fa-briefcase"></i> PT epans onlineshop </span>
										<span><i class="fa fa-map-marker"></i> Surabaya</span>
										<span><i class="fa fa-money"></i> 4500.000 / bulan</span>
										<p>As advertising & content,betugas untuk memposting, mengelola akun web dan melakukan penjualan</p>
										<a href="job-page.html" class="button">Apply Pekerjaan</a>
									</div>
								</li>

								<li>
									<div class="job-spotlight">
										<a href="#">
											<h4>freelancer untuk wordpress <span
													class="freelance">Freelance</span></h4>
										</a>
										<span><i class="fa fa-briefcase"></i> PT ReadyTech </span>
										<span><i class="fa fa-map-marker"></i> Jakarta Timur</span>
										<span><i class="fa fa-money"></i> 5000.000 / bulan / </span>
										<p>Melakukan tugas untuk menghandle wordpress seperti teamplate atau Maintenance</p>
										<a href="job-page.html" class="button">Apply Pekerjaan</a>
									</div>
								</li>

								<li>
									<div class="job-spotlight">
										<a href="#">
											<h4>Designer <span class="freelance">Freelance</span></h4>
										</a>
										<span><i class="fa fa-briefcase"></i> PT BungasunyiTech</span>
										<span><i class="fa fa-map-marker"></i> Malang</span>
										<span><i class="fa fa-money"></i> 3500.000 / bulan</span>
										<p>Melakukan tugas designer untuk baju dll.</p>
										<a href="job-page.html" class="button">Apply Pekerjaan</a>
									</div>
								</li>


							</ul>
							<div class="clearfix"></div>

						</div>
						<div class="clearfix"></div>
					</div>
				</div>

			</div>
		</div>


		<!-- Testimonials -->
		<div id="testimonials">
			<!-- Slider -->
			<div class="container">
				<div class="sixteen columns">
					<div class="testimonials-slider">
						<ul class="slides">
							<li>
								<p>Saya sudah mendengar kembali tentang magang yang saya lamar melalui pencarian kerja, itu
									jawaban pekerjaan tercepat yang pernah saya dapatkan dan itu jauh lebih baik daripada menunggu berminggu-minggu
									mendengar kembali.
									<span>Muhammad, Jakarta</span></p>
							</li>

							<li>
								<p>Saya pernah mengalami beberapa penolakan dari perusahaan namun dengan semangat tinggi, lewat lawang ini saya
									dapat pekerjaan yang sesuai dengan fashion saya.
									<span>Anonymous</span></p>
							</li>

							<li>
								<p>Banyak sekali info lowongan kerja di situs lain, namun di Lawang ini lebih banyak lagi
									<span>Tom Jerry</span></p>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>

<!-- Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Bangun karirmu bersama lawang  <a href="my-account.html"> Sekarang</a></div>
	</div>
</div>


<!-- Recent Posts -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Recent Posts</h3>
	</div>


	<div class="one-third column">

		<!-- Post #1 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="blog-single-post.html"><img src="../images/recent-post-01.jpg" alt=""></a><div class="hover-icon"></div></div>
			<a href="blog-single-post.html"><h4>Hey Pencari kerja, saatnya mimpimu di wujudkan.</h4></a>
			<div class="meta-tags">
				<span>Mei 10, 2021</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>Indonesia dengan program presiden, membangun lapangan kerja sampai 15000, siap untuk jadi wadah kerja warga kita, jangan lupa untuk selalu lihat postingan lainnya. </p>
			<a href="blog-single-post.html" class="button">Baca selengkapnya</a>
		</div>

	</div>


	<div class="one-third column">

		<!-- Post #2 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="blog-single-post.html"><img src="images/recent-post-02.jpg" alt=""></a><div class="hover-icon"></div></div>
			<a href="blog-single-post.html"><h4>Bagaimana mencari pekerjaan di website Lawang</h4></a>
			<div class="meta-tags">
				<span>Maret 12, 2021</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>Web lawang hadir untuk menjadi tangan dari pemerintah dan perusahaan yang membuka lowongan kerja, lawang bekerja sama dengan perusahaan yang mempunyai 
				kapabilitas dan tidak ada unsur lowongan bodong.
			</p>
			<a href="blog-single-post.html" class="button">Baca selengkapnya</a>
		</div>

	</div>

	<div class="one-third column">

		<!-- Post #3 -->
		<div class="recent-post">
			<div class="recent-post-img"><a href="blog-single-post.html"><img src="images/recent-post-03.jpg" alt=""></a><div class="hover-icon"></div></div>
			<a href="blog-single-post.html"><h4>7 Tips untuk membuat kamu dipanggil interview oleh perusahaan.</h4></a>
			<div class="meta-tags">
				<span>Maret 27, 2021</span>
				<span><a href="#">0 Comments</a></span>
			</div>
			<p>Keika kamu sudah merasa maksimal untuk mendapatkan pekerjaan kamu harus juga mengingat tuhanmu agar proses berikutnya lancar.</p>
			<a href="blog-single-post.html" class="button">Baca selengkapnya</a>
		</div>
	</div>

</div>



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