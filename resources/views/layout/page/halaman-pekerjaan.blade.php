@extends('layout.master.master_page')

@section('title', 'Hal-Pekerjaan')



<!-- Header === -->

<!-- Content=== -->

@section('content')
<!-- Titlebar
	================================================== -->
	<div id="titlebar" class="photo-bg" style="background: url(images/job-page-photo.jpg)">
		<div class="container">
			<div class="ten columns">
				<span><a href="browse-jobs.html">Restaurant / Food Service</a></span>
				<h2>Restaurant Team Member - Crew <span class="full-time">Full-Time</span></h2>
			</div>
	
			<div class="six columns">
				<a href="#" class="button white"><i class="fa fa-star"></i> Bookmark This Job</a>
			</div>
	
		</div>
	</div>
	

<!-- Content
================================================== -->
<div class="container">
	
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<!-- Company Info -->
		<div class="company-info">
			<img src="images/mcd.jpg" alt="">
			<div class="content">
				<h4>McDonald</h4>
				<span><a href="https://www.mcdelivery.co.id/
                    "><i class="fa fa-link"></i> www.mcdelivery.co.id</a></span>
				<span><a href="#"><i class="fa fa-twitter"></i> @McDonald</a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		<p class="margin-reset">
			PT Rekso Nasional Food (McDonalds Indonesia) sedang membuka peluang karir untuk mengisi posisi Crew Restoran Based Surabaya yang akan ditempatkan di Surabaya. Di bawah ini informasi detailnya
Persyaratan
		</p>

		<br>
		<p>Cara Melamar:</p>

		<ul class="list-1">
			<li>Ikuti panduan dengan mengisi data pribadi akurat, seperti: nama lengkap, alamat lengkap dan provinsi sesuai domisili saat ini, serta nomor handphone aktif.
			</li>
			<li>Pastikan email kamu terhubung dengan ponsel.</li>
			<li>Kamu akan diarahkan untuk mengikuti tes seleksi online sebanyak 20 soal, kurang lebih 10-15 menit waktu penyelesaian. Kerjakan dengan baik dan sejujur-jujurnya dengan memilih hal yang TIDAK akan anda lakukan.</li>
			<li>Penempatan lokasi restoran akan disesuaikan dengan domisili anda saat ini.</li>
		</ul>
		
		<br>

		<h4 class="margin-bottom-10">Kualifikasi:</h4>

		<ul class="list-1">
			<li>Lulusan SMA/Sederajat</li>
			<li>Usia maksimal 24 Tahun.</li>
			<li>Diutamakan berada di wilayah Surabaya.</li>
			<li> Bersedia bekerja secara shift termasuk hari libur.</li>
            <li>Mempunyai kemampuan komunikasi yang baik.</li>
            <li>Berpenampilan menarik, energetik, percaya diri, sabar, dan mempunyai inisiatif serta motivasi tinggi.</li>
            <li>Mampu bekerjasama dengan tim.</li>
            <li>Bersedia melampirkan hasil rapid test, surat keterangan sehat dan surat keterangan bebas narkoba</li>
            <li>Tanggung Jawab</li>
            <li>Memberikan pengalaman menyenangkan kepada pelanggan</li>
            <li>Memberikan keramahtamahan saat pelanggan berkunjung ke restoran</li>
            <li>Menyajikan menu yang disukai dengan kualitas terbaik kepada pelanggan</li>
            <li>Memastikan kebersihan di setiap workstation sesuai tanggung jawab masing-masing</li>

		</ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="five columns">

		<!-- Sort by -->
		<div class="widget">
			<h4>Overview</h4>

			<div class="job-overview">
				
				<ul>
					<li>
						<i class="fa fa-map-marker"></i>
						<div>
							<strong>Lokasi:</strong>
							<span>Surabaya,kota SBY, Jawa Timur</span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span>Crew store</span>
						</div>
					</li>
					<li>
						<i class="fa fa-clock-o"></i>
						<div>
							<strong>Bulan:</strong>
							<span>4200.000</span>
						</div>
					</li>
					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Rate:</strong>
							<span>150.000 - 200.000 / hour</span>
						</div>
					</li>
				</ul>


				<a href="#small-dialog" class="popup-with-zoom-anim button">Apply Pekerjaan</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">
						<h2>Apply pekerjaan</h2>
					</div>

					<div class="small-dialog-content">
						<form action="#" method="get" >
							<input type="text" name="nama-lengkap" placeholder="Nama Lengkap" value=""/>
							<input type="text" name="email" placeholder="Email" value=""/>
							<textarea name="pesan-promosi" placeholder="pesan untuk mempromosikan diri kamu kepada perusahaan"></textarea>

							<!-- Upload CV -->
							<div class="upload-info"><strong>Upload CV kamu</strong> <span>Max. file size: 5MB</span></div>
							<div class="clearfix"></div>

							<label class="upload-btn">
								<input type="file" name="file" multiple />
								<i class="fa fa-upload"></i> Browse
							</label>
							<span class="fake-input">No file selected</span>

							<div class="divider"></div>

							<button class="send">Send Applikasi</button>
						</form>
						{{Debugbar::info()}}
					</div>
					
				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->


</div>

@endsection