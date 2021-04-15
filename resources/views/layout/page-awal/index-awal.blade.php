@extends('layout.master.master_awal')

@section('title', 'home')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<!-- ===============Banner-->
<div id="banner" style="background: url(https://s3-ap-southeast-2.amazonaws.com/geg-gug-webapp/images/1557364192-work_while_you_study_banner.jpg)">
	<div class="container">
		<div class="sixteen columns">

			<div class="search-container">

				<!-- ==Form -->
				<h2>Cari pekerjaan anda sekarang </h2>
				<input type="text" name="judul-pekerjaan" class="ico-01" placeholder="Judul pekerjaan, posisi pekerjaan, perusahaan "
					value="" />
				<input type="text" name="lokasi" class="ico-02" placeholder="Kota, provinsi" value="" />
				<a href="/browse-jobs"><button><i class="fa fa-search"></i></button></a>

				<!-- ==Browse Jobs -->
				<div class="browse-jobs">
					Cari pekerjaan sesuai dengan <a href="#"> Kategori</a> atau <a
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


<!-- =========================================Pekerjaan -->
<div class="container">

	<!-- Recent Jobs -->
	<div class="eleven columns">
		<div class="padding-right">
			<h3 class="margin-bottom-25">Pekerjaan Terbaru</h3>
			<ul class="job-list">


				<li>
					<a href="/halaman-pekerjaan-awal">
						<img src="images/job-list-logo-03.png" alt="">
						<div class="job-list-content">
							<h4>Restaurant Team Member <span class="full-time">Full-Time</span></h4>
							<div class="job-icons">
								<span><i class="fa fa-briefcase"></i> Mcd Surabaya</span>
								<span><i class="fa fa-map-marker"></i> Surabaya</span>
								<span><i class="fa fa-money"></i> 4200.000 / bulan</span>

							</div>
						</div>
					</a>
					<div class="clearfix"></div>
				</li>
			</ul>


			<a href="/browse-jobs-awal" class="button centered"><i class="fa fa-plus-circle"></i> lihat pekerjaan lainnya</a>
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
			<div class="showbiz" data-left="#showbiz_left_1" data-right="#showbiz_right_1" data-play="#showbiz_play_1">
				<div class="overflowholder">

					<ul>

						<li>
							<div class="job-spotlight">
								<a href="#">
									<h4>Social Media <span class="part-time">Part-Time</span></h4>
								</a>
								<span><i class="fa fa-briefcase"></i> PT epans onlineshop </span>
								<span><i class="fa fa-map-marker"></i> Surabaya</span>
								<span><i class="fa fa-money"></i> 4500.000 / bulan</span>
								<p>As advertising & content,betugas untuk memposting, mengelola akun web dan melakukan
									penjualan</p>
								<a href="/daftar-awal" class="button">Daftar / login Terlebih dahulu</a>
							</div>
						</li>

						<li>
							<div class="job-spotlight">
								<a href="#">
									<h4>Freelancer untuk wordpress <span class="freelance">Freelance</span></h4>
								</a>
								<span><i class="fa fa-briefcase"></i> PT ReadyTech </span>
								<span><i class="fa fa-map-marker"></i> Jakarta Timur</span>
								<span><i class="fa fa-money"></i> 5000.000 / bulan / </span>
								<p>Melakukan tugas untuk menghandle wordpress seperti teamplate atau Maintenance
								</p>
								<a href="/halaman-pekerjaan" class="button">Apply Pekerjaan</a>
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
								<a href="/halaman-pekerjaan" class="button">Apply Pekerjaan</a>
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

<!-- =============== endbanyaknya pengguna -->

<!-- =============== Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Bangun karirmu bersama lawang <a href="/daftar-awal"> Sekarang</a></div>
	</div>
</div>


<!--  ===============================================Clients Carousel -->
<h3 class="centered-headline"> Perusahaan yang telah mempercayai kami <span> Daftar perusahaan yang telah mempercayai kami
		:</span></h3>
<div class="clearfix"></div>

<div class="container">

	<div class="sixteen columns">

		<!-- Navigation / Left -->
		<div class="one carousel column">
			<div id="showbiz_left_2" class="sb-navigation-left-2"><i class="fa fa-angle-left"></i></div>
		</div>

		<!-- ShowBiz Carousel -->
		<div id="our-clients" class="showbiz-container fourteen carousel columns">

			<!-- Portfolio Entries -->
			<div class="showbiz our-clients" data-left="#showbiz_left_2" data-right="#showbiz_right_2">
				<div class="overflowholder">

					<ul>
						<!-- Item -->
						<li><img src="{{asset('images/logo-transjakarta.png')}}" alt="" /></li>
						<li><img src="{{asset('images/logo-mrt.png')}}" alt="" /></li>
						<li><img src="{{asset('images/logo-pertamina.png')}}" alt="" /></li>
						<li><img src="{{asset('images/gojek-logo.jpeg')}}" alt="" /></li>
						<li><img src="{{asset('images/shoppe.png')}}" alt="" /></li>
						<li><img src="{{asset('images/uniliver-logo.png')}}" alt="" /></li>
						<li><img src="{{asset('images/logo-nasa.png')}}" alt="" /></li>
					</ul>
					<div class="clearfix"></div>

					{{Debugbar::info(asset('images/logo-transjakarta.png'))}}
					
				</div>
				<div class="clearfix"></div>

			</div>
		</div>

		<!-- Navigation / Right -->
		<div class="one carousel column">
			<div id="showbiz_right_2" class="sb-navigation-right-2"><i class="fa fa-angle-right"></i></div>
		</div>

	</div>

</div>









{{-- =============== end -- counter - banyak pengguna --}}






@endsection