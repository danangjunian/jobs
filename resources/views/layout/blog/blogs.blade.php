@extends('layout.master.master_page')

@section('title', 'blog')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Blog</h2>
			<span>Berita yang terus terupdate</span>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="eleven columns">
		<div class="padding-right">

			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="/blog-post"><img
							src="images/7-Tanda-Lowongan-Palsu-di-Situs-Pencari-Kerja.png"
							alt=""></a>
					<div class="hover-icon"></div>
				</div>
				<div class="post-content">
					<a href="#">
						<h3>7 Tanda lowongan hoax, Pelamar wajib mengetahui.</h3>
					</a>
					<div class="meta-tags">
						<span>October 10, 2019</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<p>Untuk mendapatkan sebuah pekerjaan, langkah pertama yang harus kamu lakukan adalah mencari lowongan pekerjaan yang sesuai dengan kriteria dirimu.
						Namun, saat ini banyak terdapat informasi lowongan kerja yang tidak benar atau palsu. Nah,
						agar kamu tidak tertipu dengan lowongan kerja serupa,
						simak ciri-ciri lowongan kerja palsu berikut ini.
					</p>
					<a class="button" href="/blog-post">Baca Selengkapnya</a>
				</div>
			</div>

			<!-- Post -->
			<!-- Post -->

			<!-- Pagination -->
			<div class="pagination-container">
				<nav class="pagination">
					<ul>
						<li><a href="#" class="current-page">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
					</ul>
				</nav>

				<nav class="pagination-next-prev">
					<ul>
						<li><a href="#" class="prev">Previous</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</nav>
			</div>

		</div>
	</div>
	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="five columns blog">

		<!-- Search -->
		<div class="widget">
			<h4>Search</h4>
			<div class="widget-box search">
				<div class="input"><input class="search-field" type="text" name="search" placeholder="Klik kata kunci"
						value="" /></div>
			</div>
		</div>
{{-- 
		<div class="widget">
			<h4>Ada Pertanyaan?</h4>
			<div class="widget-box">
				<p>Jika kamu mempunyai pertanyaan, saran & kritik, silahkan email kami.</p>
				<a href="contact.html" class="button widget-btn" name"kritik" ><i class="fa fa-envelope"></i> Drop pertanyaan</a>
			</div>
		</div> --}}

		<!-- Tabs -->
		<div class="widget">

			<ul class="tabs-nav blog">
				<li class="active"><a href="#tab1">Populer</a></li>
				<li><a href="#tab2">Featured</a></li>
				<li><a href="#tab3">Recent</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">

					<!-- Recent Posts -->
					<ul class="widget-tabs">



						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="/blog-post"><img src="images/7-Tanda-Lowongan-Palsu-di-Situs-Pencari-Kerja.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="/blog-post">7 tanda lowongan hoax, Pelamar wajib mengetahui.</a></h5>
								<span>October 10, 2019</span>
							</div>
							<div class="clearfix"></div>

						</li>
					</ul>

				</div>

				<div class="tab-content" id="tab2">

					<!-- Featured Posts -->
					<ul class="widget-tabs">

						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="/blog-post"><img src="images/7-Tanda-Lowongan-Palsu-di-Situs-Pencari-Kerja.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="/blog-post">7 tanda lowongan hoax, Pelamar wajib mengetahui.</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
					</ul>
				</div>

				<div class="tab-content" id="tab3">

					<!-- Recent Posts -->
					<ul class="widget-tabs">

						<!-- Post #1 -->

						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="/blog-post"><img src="images/7-Tanda-Lowongan-Palsu-di-Situs-Pencari-Kerja.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="/blog-post"> 7 tanda lowongan hoax, Pelamar wajib mengetahui. </a>
								</h5>
								<span>October 10, 2019</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
				</div>

			</div>
		</div>


		<div class="widget">
			<h4>Social</h4>
			<ul class="social-icons">
				<li><a class="facebook" href="https://www.facebook.com/JobStreetIndonesia"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="https://twitter.com/jobstreetcom"><i class="icon-twitter"></i></a></li>
				<li><a class="linkedin" href="linkedin.com/company/kalibrr-technology-ventures/"><i class="icon-linkedin"></i></a></li>
			</ul>

		</div>

		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>

	</div>
	<!-- Widgets / End -->


</div>
@endsection