@extends('layout.master.master_page')

@section('title', 'Preview Resume')

@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="resume">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">
				<img src="https://media.suara.com/pictures/653x366/2020/12/25/36001-skin-black-panther-fortnite.jpg" alt="">
				<div class="resumes-list-content">
					<h4>Stiawan Jodi <span>Crew Store</span></h4>
					<span class="icons"><i class="fas fa-map-marker-alt"></i> surabaya city</span>
					<span class="icons"><i class="fa fa-money"></i>Rp. 4.200.000 / hour</span>
					<span class="icons"><a href="http://founderbaca.rgijatim.com/"><i class="fa fa-link"></i> founderbaca.rgijati.com</a></span>
					<span class="icons"><a href="stiawan.jodi270695@gmail.com"><i class="fa fa-envelope"></i> stiawan.jodi270695@gmail.com</a></span>
					<div class="skills">
						<span>JavaScript</span>
						<span>PHP</span>
						<span>WordPress</span>
						<span>komunikasi</span>
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>

		<div class="six columns">
			<div class="two-buttons">

				{{-- <a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Kirim Pesan</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Send Message to John antoni</h2>
					</div>

					<div class="small-dialog-content">
						<form action="#" method="get" >
							<input type="text" name="nama-lengkap" placeholder="Nama lengkap" value=""/>
							<input type="text" name="email" placeholder="Email" value=""/>
							<textarea name="pesan" placeholder="Pesan"></textarea>

							<button class="send" name="send" >Send</button>
						</form>
					</div>
					
				</div> --}}
			</div>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eight columns">
	<div class="padding-right">

		<h3 class="margin-bottom-15">Tentang saya</h3>

		<p class="margin-reset">
			Spesialis Layanan pelanggan memastikan layanan pelanggan yang luar biasa diberikan kepada pelanggan makanan, minuman dan bahwa semua penawaran makanan memenuhi tingkat stok dan standar presentasi yang disyaratkan. Memulai karir Anda sebagai Food Stewar akan memberi Anda dasar yang kuat di segmen makanan Speedway yang dapat menjadikan Anda anggota penting di tim lini depan!
		</p>

		<br>

		<p><strong>Spesialis Layanan </strong> memiliki tanggung jawab yang meliputi:</p>

		<ul class="list-1">
			<li>Keterampilan layanan pelanggan yang sangat baik, keterampilan komunikasi, dan sikap bahagia dan tersenyum sangat penting.</li>
			<li>Harus tersedia untuk bekerja shift yang diperlukan termasuk akhir pekan, malam hari dan hari libur.</li>
			<li>Harus mampu memberikan senyuman walaupun itu senyuman palsu</li>
			<li>Harus bisa sesekali mengangkat hingga 50 juta / bulan</li>
		</ul>

	</div>
	<div class="eight columns">

		<h3 class="margin-bottom-20">Media sosial</h3>

		<!-- Resume Table -->
		<dl class="resume-table">
			<dt>
			<strong>	<i class="fab fa-facebook"> stiawan zoddy</i> </strong>
			</dt>

			<dt>
				<strong> <i class="fab fa-linkedin-in"> stiawan jodi</i></strong>
			</dt>


			<dt>
				
				<strong> <i class="fab fa-instagram"></i> stiawan.jodi_ </strong>
			</dt>

		</dl>

	</div>
	</div>


	<!-- Widgets -->
	<div class="eight columns">

		<h3 class="margin-bottom-20">Pendidikan</h3>

		<!-- Resume Table -->
		<dl class="resume-table">
			<dt>
				<small class="date">2009 - 2011</small>
				<strong>MTs Nurul Huda</strong>
			</dt>

		
			<dt>
				<small class="date">2011 - 2014</small>
				<strong>MA MIFTAHUTTHOLIBIN</strong>
			</dt>
			<dd>
				<p>Ilmu Pengetahuan sosial</span> </p>
			</dd>


			<dt>
				<small class="date">2014 - 2019</small>
				<strong>Universitas Indonesia</strong>
				<p> Manajemen Ekonomi</p>
			</dt>
			<dd>
				<p>Ipk : 3.50</p>
			</dd>
			<dt>
				<small class="date">2021 (januari-mei)</small>
				<strong>Rumah Gemilang Indonesia</strong>
				<p> Rekayasa perangkat lunak</p>
			</dt>
			<dd>
				<p>Ipk : 3.50</p>
			</dd>

		</dl>

	</div>

	<div class="eight columns">

		<h3 class="margin-bottom-20">Pengalaman kerja</h3>

		<!-- Resume Table -->
		<dl class="resume-table">
			<dt>
				<small class="date">2019-2020</small>
				<strong>PT Transportasi Jakarta</strong>
				<large class="text">Petugas sterilasasi jalur</large>
			</dt>

		
			<dt>
				<small class="date">2018-2019</small>
				<strong>PT Transportasi Jakarta</strong>
			</dt>
			<dd>

				<large class="text">Petugas Layanan bus</large>

			</dd>

			<dt>
				<small class="date">2014-2018</small>
				<strong>PT Sumber Alfaria Trijaya</strong>
			</dt>
			<dd>

				<large class="text">Pramuniaga</large>

			</dd>

		</dl>

	</div>

</div>

<a href="/atur-resume"><button style="margin-left: 15%" name="kembali" class="margin-bottom-20">kembali</button></a>
<div>

</div>
@endsection