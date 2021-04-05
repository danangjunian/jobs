@extends('layout.master2')

@section('title', 'home')
	


<!-- Header === -->

<!-- Content=== -->

@section('content')

<!-- ===============Banner-->
<div id="banner" style="background: url(images/banner-home-01.jpg)">
	<div class="container">
		<div class="sixteen columns">

			<div class="search-container">

				<!-- ==Form -->
				<h2>Cari pekerjaan anda sekarang </h2>
				<input type="text" class="ico-01" placeholder="Judul pekerjaan, posisi pekerjaan, perusahaan "
					value="" />
				<input type="text" class="ico-02" placeholder="Kota, provinsi" value="" />
				<button><i class="fa fa-search"></i></button>

				<!-- ==Browse Jobs -->
				<div class="browse-jobs">
					Cari pekerjaan sesuai dengan <a href="browse-categories.html"> Kategori</a> atau <a
						href="#">Lokasi</a>
				</div>

				<!-- ==Announce -->
				<div class="announce">
					Membuka lowongan pekerjaan <strong>15.000</strong> menuju Indonesia Generasi Emas 2045!
				</div>

			</div>

		</div>
	</div>
</div>
	

<!-- ============================================Categories -->
<div class="container">
	<div class="sixteen columns">
		<h3 class="margin-bottom-25">Popular Categories</h3>
		<ul id="popular-categories">
			<li><a href="#"><i class="fa fa-line-chart"></i> Accounting / Finance</a></li>
			<li><a href="#"><i class="fa fa-wrench"></i> Automotive Jobs</a></li>
			<li><a href="#"><i class="fa fa-building-o"></i> Construction / Facilities</a></li>
			<li><a href="#"><i class="fa fa-graduation-cap"></i> Education Training</a></li>
			<li><a href="#"><i class="fa fa-medkit"></i> Healthcare</a></li>
			<li><a href="#"><i class="fa fa-cutlery"></i> Restaurant / Food Service</a></li>
			<li><a href="#"><i class="fa fa-globe"></i> Transportation / Logistics</a></li>
			<li><a href="#"><i class="fa fa-laptop"></i> Telecommunications</a></li>
		</ul>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="browse-categories.html" class="button centered">Browse All Categories</a>
		<div class="margin-bottom-50"></div>
	</div>
</div>

<!-- =========================================Pekerjaan -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		<h3 class="margin-bottom-25">Recent Jobs</h3>
		<ul class="job-list">

			<li class="highlighted"><a href="job-page.html">
				<img src="images/job-list-logo-01.png" alt="">
				<div class="job-list-content">
					<h4>Marketing Coordinator - SEO / SEM Experience <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $100 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-02.png" alt="">
				<div class="job-list-content">
					<h4>Core PHP Developer for Site Maintenance <span class="part-time">Part-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Cubico</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $50 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-03.png" alt="">
				<div class="job-list-content">
					<h4>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> King</span>
						<span><i class="fa fa-map-marker"></i> Sydney</span>
						<span><i class="fa fa-money"></i> $15 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-04.png" alt="">
				<div class="job-list-content">
					<h4>Power Systems User Experience Designer  <span class="internship">Internship</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Hexagon</span>
						<span><i class="fa fa-map-marker"></i> London</span>
						<span><i class="fa fa-money"></i> $75 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>

			<li><a href="job-page.html">
				<img src="images/job-list-logo-05.png" alt="">
				<div class="job-list-content">
					<h4>iPhone / Android Music App Development <span class="temporary">Temporary</span></h4>
					<div class="job-icons">
						<span><i class="fa fa-briefcase"></i> Mates</span>
						<span><i class="fa fa-map-marker"></i> New York</span>
						<span><i class="fa fa-money"></i> $115 / hour</span>
					</div>
				</div>
				</a>
				<div class="clearfix"></div>
			</li>
		</ul>

		<a href="browse-jobs.html" class="button centered"><i class="fa fa-plus-circle"></i> Show More Jobs</a>
		<div class="margin-bottom-55"></div>
	</div>
	</div>

	<!-- Job Spotlight -->
	<div class="five columns">
		<h3 class="margin-bottom-5">Job Spotlight</h3>

		<!-- Navigation -->
		<div class="showbiz-navigation">
			<div id="showbiz_left_1" class="sb-navigation-left"><i class="fa fa-angle-left"></i></div>
			<div id="showbiz_right_1" class="sb-navigation-right"><i class="fa fa-angle-right"></i></div>
		</div>
		<div class="clearfix"></div>
		
		<!-- Showbiz Container -->
		<div id="job-spotlight" class="showbiz-container">
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1" >
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Social Media: Advertising Coordinator <span class="part-time">Part-Time</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Mates</span>
								<span><i class="fa fa-map-marker"></i> New York</span>
								<span><i class="fa fa-money"></i> $20 / hour</span>
								<p>As advertising & content coordinator, you will support our social media team in producing high quality social content for a range of media channels.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Prestashop / WooCommerce Product Listing <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> King</span>
								<span><i class="fa fa-map-marker"></i> London</span>
								<span><i class="fa fa-money"></i> $25 / hour</span>
								<p>Etiam suscipit tellus ante, sit amet hendrerit magna varius in. Pellentesque lorem quis enim venenatis pellentesque.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#"><h4>Logo Design <span class="freelance">Freelance</span></h4></a>
								<span><i class="fa fa-briefcase"></i> Hexagon</span>
								<span><i class="fa fa-map-marker"></i> Sydney</span>
								<span><i class="fa fa-money"></i> $10 / hour</span>
								<p>Proin ligula neque, pretium et ipsum eget, mattis commodo dolor. Etiam tincidunt libero quis commodo.</p>
								<a href="job-page.html" class="button">Apply For This Job</a>
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
<!--  ===============-===============================end -- Pekerjaan -->



<!--  ===============================================Clients Carousel -->
<h3 class="centered-headline">Clients Who Have Trusted Us <span>The list of clients who have put their trust in us includes:</span></h3>
<div class="clearfix"></div>

<div class="container">

	<div class="sixteen columns">

		<!-- Navigation / Left -->
		<div class="one carousel column"><div id="showbiz_left_2" class="sb-navigation-left-2"><i class="fa fa-angle-left"></i></div></div>

		<!-- ShowBiz Carousel -->
		<div id="our-clients" class="showbiz-container fourteen carousel columns" >

		<!-- Portfolio Entries -->
		<div class="showbiz our-clients" data-left="#showbiz_left_2" data-right="#showbiz_right_2">
			<div class="overflowholder">

				<ul>
					<!-- Item -->
					<li><img src="images/TRANSJAKARTA.jpg" style="height: 100px" alt="" /></li>
					<li><img src="images/Logo-MRT-Jakarta-Secondary.jpg" style="height: 100px" alt="" /></li>
					<li><img src="images/pertamina.jpg" style="height: 100px"   alt="" /></li>
					<li><img src="images/gojek-logo.jpeg" style="height: 100px" alt="" /></li>
					<li><img src="images/shoppe.png" style="height: 100px" alt="" /></li>
					<li><img src="images/logo-06.png" alt="" /></li>
					<li><img src="images/logo-07.png" alt="" /></li>
				</ul>
				<div class="clearfix"></div>

			</div>
			<div class="clearfix"></div>

		</div>
		</div>

		<!-- Navigation / Right -->
		<div class="one carousel column"><div id="showbiz_right_2" class="sb-navigation-right-2"><i class="fa fa-angle-right"></i></div></div>

	</div>

</div>



{{-- =============counter - banyak pengguna --}}
<div id="counters">
	<div class="container">

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">15</span><i>k</i>
				<p>Lowongan Kerja</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">4982</span>
				<p>Anggota</p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">768</span>
				<p>Resume yang di posting </p>
			</div>
		</div>

		<div class="four columns">
			<div class="counter-box">
				<span class="counter">90</span><i>%</i>
				<p>Clients Who Rehire</p>
			</div>
		</div>

	</div>
</div>


<!-- =============== Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Bangun karirmu bersama lawang  <a href="/signup"> Sekarang</a></div>
	</div>
</div>


{{-- =============== end -- counter - banyak pengguna --}}





	
@endsection
