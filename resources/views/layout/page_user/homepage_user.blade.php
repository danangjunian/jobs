@extends('layout.master.master_user')
@section('title','Home')
    @section('content')



	<!-- Slider
		================================================== -->
		<div class="fullwidthbanner-container">
			<div class="fullwidthbanner">
				<ul>
		
					<!-- Slide 1 -->
					<li data-fstransition="fade" data-transition="fade" data-slotamount="10" data-masterspeed="300">
		
						<img src="https://www.bytestart.co.uk/wp-content/uploads/2021/01/work-life-balance.jpg" alt="">
		
						<div class="caption title sfb" data-x="0" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
							<h2 style="color: orange; background-color: white; opacity: 0.8;">Jelajahi dan Temukan</h2>
						</div>
		
						<div class="caption text sfb" data-x="0" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
							<p>Terhubung langsung dan temukan pekerja <br>yang berbakat untuk perusahaan anda.</p>
						</div>
		
						{{--  <div class="caption sfb" data-x="0" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">
							<a href="/daftar-awal" class="slider-button">Mulai Sekarang</a>
						</div>  --}}
					</li>
		
					<!-- Slide 2 -->
					<li data-transition="slideup" data-slotamount="10" data-masterspeed="800">
						<img src="https://sleekr.co/wp-content/uploads/2019/05/shutterstock_1149276653.jpg" alt="">
		
						<div class="caption title sfb" data-x="center" data-y="165" data-speed="400" data-start="800"  data-easing="easeOutExpo">
							<h2 style="color: orange; ">Pekerjakan karyawan yang hebat</h2>
						</div>
		
						<div class="caption text align-center sfb" data-x="center" data-y="240" data-speed="400" data-start="1200" data-easing="easeOutExpo">
							<p style="color:white; background-color: orange;">Lawang adalah Platform pekerjaan paling tepercaya, menghubungkan dunia</p>
						</div>
		
						<div class="caption sfb" data-x="center" data-y="370" data-speed="400" data-start="1600" data-easing="easeOutExpo">
							<a href="/tambah-pekerjaan" class="slider-button">Hire</a>
						</div>
					</li>
		
				</ul>
			</div>
		</div>
		
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
						<p>Resume yang di posting </p>
					</div>
				</div>
		

		
			</div>
		</div>
		
		<!-- =============== endbanyaknya pengguna -->
		
		<!-- =============== Infobox -->
		<div class="infobox">
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