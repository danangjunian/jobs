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
				<div class="post-img"><a href="blog-single-post.html"><img
							src="data:image/jpeg;base64,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"
							alt=""></a>
					<div class="hover-icon"></div>
				</div>
				<div class="post-content">
					<a href="#">
						<h3>7 Tanda lowongan hoax, Pelamar wajib mengetahui</h3>
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
					<a class="button" href="blog-single-post.html">Baca Selengkapnya</a>
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

		<div class="widget">
			<h4>Ada Pertanyaan?</h4>
			<div class="widget-box">
				<p>Jika kamu mempunyai pertanyaan, saran & kritik, silahkan email kami.</p>
				<a href="contact.html" class="button widget-btn" name"kritik" ><i class="fa fa-envelope"></i> Drop pertanyaan</a>
			</div>
		</div>

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
								<a href="blog-single-post.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="blog-single-post.html">Hey Job Seeker, It’s Time To Get Up And Get
										Hired</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>

						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="blog-single-post.html">11 Tips to Help You Get New Clients Through Cold
										Calling</a></h5>
								<span>August 27, 2015</span>
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
								<a href="blog-single-post.html"><img src="images/blog-widget-02.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="blog-single-post.html">Hey Job Seeker, It’s Time To Get Up And Get
										Hired</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>

						<!-- Post #2 -->


						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="blog-single-post.html"><img src="images/blog-widget-03.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="blog-single-post.html">11 Tips to Help You Get New Clients Through Cold
										Calling</a></h5>
								<span>August 27, 2015</span>
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
								<a href="blog-single-post.html"><img src="images/blog-widget-01.png" alt="" /></a>
							</div>

							<div class="widget-text">
								<h5><a href="blog-single-post.html">How to "Woo" a Recruiter and Land Your Dream Job</a>
								</h5>
								<span>September 12, 2015</span>
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
				<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
				<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
				<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
			</ul>

		</div>

		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>

	</div>
	<!-- Widgets / End -->


</div>
@endsection