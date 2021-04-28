@extends('layout.master.master_page')

@section('title', 'Single Post')



<!-- Header === -->

<!-- Content=== -->

@section('content')


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Blog</h2>
			<span> Tetap up to date dengan berita terbaru </span>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="eleven columns">
		<div class="padding-right">

			@foreach ($post as $p)
			<h2 class="judul"><a href="/blog-detail/{{ $p->id }}">{{ $p->judul }}</a></h2>
			<div class="gambar">
				<img src="{{'data_file/'.$p->images}}" alt="">
			</div>
			<div class="content">
				{{$p->sinopsis}}

			</div>
			<a href="/blog-detail/{{ $p->id }}"><button> baca </button></a>
				
			@endforeach



			</section>
			<div class="clearfix"></div>
			<div class="margin-top-35"></div>






		</div>
	</div>
	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="five columns blog">




			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">

					<!-- Recent Posts -->
					<ul class="widget-tabs">

						<!-- Post #1 -->
						<li>
							@foreach ($post as $p)
							
							<div class="widget-thumb" >
									<img src="{{'data_file/'.$p->images}}" alt="">
							</div>

							<div class="widget-text">
								<h2 class="judul">{{ $p->judul }}</h2>
							</div>

							<div class="clearfix"></div>
							@endforeach
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