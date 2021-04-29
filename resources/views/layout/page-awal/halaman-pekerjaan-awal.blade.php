@extends('layout.master.master_awal')

@section('title', 'Hal-Pekerjaan')



<!-- Header === -->

<!-- Content=== -->

@section('content')
<!-- Titlebar
	================================================== -->
	<div id="titlebar" class="photo-bg" style="background: url(images/job-page-photo.jpg)">
		<div class="container">
			<div class="ten columns">
				<span style="color: white">{{ $awal->nama_perusahaan}}</span>
				<h2>{{ $awal->judul_jobs}}</h2>
			</div>
	
			{{--  <div class="six columns">
				<a href="#" class="button white"><i class="fa fa-star"></i> Bookmark This Job</a>
			</div>  --}}
	
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
			<img src="/images/job-list-logo-03.png" alt="">
			<div class="content">
				
				
			
				<h4><p>{{$awal->judul_jobs}}</p></h4>
				<span><a href="https://www.mcdelivery.co.id/
                    "><i class="fa fa-link"></i> {{ $awal->email_perusahaan	}}</a></span>
			</div>
			<div class="clearfix"></div>
		</div>

		<p class="margin-reset">
			{{ $awal->jobs_dibuka}}
		</p>
		<p>{{$awal->judul_jobs}}</p>
		<p>{{$awal->lokasi_jobs}}</p>
		<br>		
		<ul class="list-1">
			<h4 class="margin-bottom-10">Tugas dan Tanggung Jawab :</h4>
			<li>{{$awal->deskripsi_jobs}}</li>
		</ul>
		
		<br>

		{{--  <h4 class="margin-bottom-10">Kualifikasi:</h4>

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

		</ul>  --}}

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
							<span>{{$awal->lokasi_jobs}}</span>
						</div>
					</li>
					<li>
						<i class="fa fa-user"></i>
						<div>
							<strong>Job Title:</strong>
							<span>{{$awal->judul_jobs}}</span>
						</div>
					</li>
					<li>
						<i class="fa fa-money"></i>
						<div>
							<strong>Gaji Bulan:</strong>
							<span>Rp : {{$awal->gaji}}</span>
						</div>
					</li>
				</ul>


				<a href="#small-dialog" class="popup-with-zoom-anim button">Apply Pekerjaan</a>

				<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
					<div class="small-dialog-headline">

						

							<div class="my-account">
						
								<div class="tabs-container">
									<!-- Login -->
									<div class="tab-content" id="tab1" style="display: none;">
						
										<h3 class="margin-bottom-10 margin-top-10" style="background-color: salmon; color: white; border: 1px solid; text-align: center;">Daftarkan Diri Anda Untuk Mendapatkan Pekerjaan :</h3>
						
										<hr>
						
										<form method="get" action="/index" class="signup">
						
											
											<p class="form-row form-row-wide">
												<input type="text" class="input-text" name="username" id="username" value="" placeholder="Nama Depan"/>
											</p>
											
											<p class="form-row form-row-wide">
												<input class="input-text" type="text" name="NamaBelakang" id="NamaBelakang" placeholder="Nama Belakang" />
											</p>
						
											<p class="form-row form-row-wide">
												<input class="input-text" type="Email" name="Email" id="Email" placeholder="E-mail"/>
											</p>
											<p class="form-row form-row-wide">
												<input class="input-text" type="text" name="Phone" id="Phone" placeholder="+62"/>
											</p>
											<p class="form-row form-row-wide">
												<input class="input-text" type="password" name="password" id="password" placeholder="Password"/>
											</p>
						
											<p class="form-row">
												<input type="submit" class="button" name="signup" value="Daftar" />
												<label for="SyaratKetentuan" class="SyaratKetentuan">
												<input style="margin: 14px 0 0 0" name="SyaratKetentuan" type="checkbox" id="SyaratKetentuan" value="forever" /> Baca <a href="#">Syarat dan Ketentuan</a></label>
											</p>
						
										
											<p style="text-align:center;" class="lost_password">
												<span>Sudah Mempunyai Akun? <a href="/daftar-awal"> Masuk</a></span> 
											</p>
						
											
										</form>
										<hr>
									</div>
								</div>
							</div>
						</div>



					</div>
					
				</div>

			</div>

		</div>

	</div>
	<!-- Widgets / End -->


</div>

@endsection