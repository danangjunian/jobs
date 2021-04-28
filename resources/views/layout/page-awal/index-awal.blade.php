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

				@foreach ($resume->slice(0, 3)	 as $x)

				<li>
					<a href="/halaman-pekerjaan-awal/{{ $x->jobs_id }}">
						<img src="images/job-list-logo-03.png" alt="">
						<div class="job-list-content">
							<h4>{{ $x->judul_jobs }}<span class="full-time">{{ $x->tipe_pekerjaan }}</span></h4>
							<div class="job-icons">
								<span><i class="fa fa-briefcase"></i> {{ $x->nama_perusahaan }}</span>
								<span><i class="fa fa-map-marker"></i> {{ $x->lokasi_jobs }}</span>
								<span><i class="fa fa-money"></i> RP. 4200.000 / bulan</span>

							</div>
						</div>
					</a>
					<div class="clearfix"></div>
				</li>
				@endforeach
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
						@foreach ($resume as $s)
							
						<li>
							<div class="job-spotlight">
								<a href="/halaman-pekerjaan-awal/{{ $s->jobs_id }}">
									<h4>{{ $s->judul_jobs }}  <span class="freelance">{{ $s->tipe_pekerjaan }}</span></h4>
								</a>
								<span><i class="fa fa-briefcase"></i> {{ $s->nama_perusahaan }}</span>
								<span><i class="fa fa-map-marker"></i> {{ $s->lokasi_jobs }}</span>
								<span><i class="fa fa-money"></i> 3500.000 / bulan</span>
								<p>{{ $truncated = Str::limit($s->deskripsi_jobs,50) }}</p>
								<a href="/login-awal" class="button">Apply Pekerjaan</a>
							</div>
						</li>

						@endforeach
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

		<div class="five columns">
			<div class="counter-box">
				<span class="counter">{{ $count }}</span>
				<p>Lowongan Kerja</p>
			</div>
		</div>

		<div class="five columns">
			<div class="counter-box">
				<span class="counter">{{ $anggota }}</span>
				<p>Anggota Perusahaan</p>
			</div>
		</div>

		<div class="five columns">
			<div class="counter-box">
				<span class="counter">{{ $count }}</span>
				<p>Resume yang di terima kerja </p>
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
{{-- <h3 class="centered-headline"> Perusahaan yang telah mempercayai kami <span> Daftar perusahaan yang telah mempercayai kami
		:</span></h3>
<div class="clearfix"></div> --}}

{{-- <div class="container">

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

</div> --}}









{{-- =============== end -- counter - banyak pengguna --}}






@endsection