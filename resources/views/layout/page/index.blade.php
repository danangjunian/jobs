@extends('layout.master.master_page')

@section('title', 'home')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<!-- ===============Banner-->
<div id="banner" style="background: url(https://b8g9x2x5.rocketcdn.me/wp-content/uploads/2018/08/building-blocks-wall-ss-1920_bchdxd.jpg)">
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
					Cari pekerjaan sesuai dengan <a href="/category"> Kategori</a> atau <a
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
		<h3 class="margin-bottom-25">Kategori Populer</h3>
		<ul id="popular-categories">
			<li><a href="/browse-jobs"><i class="far fa-money-bill-alt"></i></i> Akuntansi / Keuangan</a></li>
			<li><a href="/browse-jobs"><i class="fa fa-wrench"></i> Mekanik / Otomotive</a></li>
			<li><a href="/browse-jobs"><i class="fa fa-building"></i> K3 & HSE / Contruksi  </a></li>
			<li><a href="/browse-jobs"><i class="fa fa-graduation-cap"></i> Pendidikan </a></li>
			<li><a href="/browse-jobs"><i class="fa fa-medkit"></i> Kesehatan</a></li>
			<li><a href="/browse-jobs"><i class="fas fa-utensils"></i> Restoran / Pelayan Restoran</a></li>
			<li><a href="/browse-jobs"><i class="fas fa-bus"></i> Transportasi / Logistik</a></li>
			<li><a href="/browse-jobs"><i class="fa fa-laptop"></i> telekomukiasi / Ilmu Teknologi</a></li>
		</ul>

		<div class="clearfix"></div>
		<div class="margin-top-30"></div>

		<a href="/cari-kategori" class="button centered">Cari semua categori</a>
		<div class="margin-bottom-50"></div>
	</div>
</div>

<!-- =========================================Pekerjaan -->
<div class="container">

	<!-- Recent Jobs -->
	<div class="eleven columns">
		<div class="padding-right">
			<h3 class="margin-bottom-25">Pekerjaan Terbaru</h3>
			<ul class="job-list">


				
				@foreach ($lihatjobs->slice(0, 2) as $x)
					
				<li>
					<a href="/post/jobs/{{ $x->jobs_id }}">
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


		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><span class="current-page">{!! $lihatjobs->links() !!}</span></li>
				</ul>
			</nav>
		</div>

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
						@foreach ($lihatjobs as $x)
						<li>
							<div class="job-spotlight">
								<a href="#">
									<h4>{{ $x->judul_jobs }}<span class="part-time">{{ $x->tipe_pekerjaan }}</span></h4>
								</a>
								<span><i class="fa fa-briefcase"></i> {{ $x->nama_perusahaan }} </span>
								<span><i class="fa fa-map-marker"></i> {{ $x->lokasi_jobs }}</span>
								<span><i class="fa fa-money"></i>Rp. 4500.000 / bulan</span>
								<p>{{ $truncated = Str::limit($x->deskripsi_jobs, 50) }} </p>
								<a href="/post/jobs/{{ $x->jobs_id }}" class="button">Detail Pekerjaan</a>
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
				<span class="counter">{{ $datamaster }}</span><i></i>
				<p>Perusahaan</p>
			</div>
		</div>

		<div class="five columns">
			<div class="counter-box">
				<span class="counter">{{ $datapelamar }}</span>
				<p>Anggota</p>
			</div>
		</div>

		<div class="five columns">
			<div class="counter-box">
				<span class="counter"> {{ $datapekerjaan }} </span>
				<p>Jumlah Pekerjaan</p>
			</div>
		</div>


	</div>
</div>

<!-- =============== endbanyaknya pengguna -->
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