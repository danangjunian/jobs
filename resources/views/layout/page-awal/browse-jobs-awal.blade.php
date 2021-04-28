@extends('layout.master.master_awal')

@section('title', 'cari pekerjaan')



<!-- Header === -->

<!-- Content=== -->

@section('content')


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<form action="#" method="get" class="list-search">
			<button><i class="fa fa-search"></i></button>
			<input type="text" name="search" placeholder="job title, keywords or company name" value=""/>
			<div class="clearfix"></div>
		</form>
		<ul class="job-list">

			@foreach ($jobslist as $x)

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




		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="blank">...</li>
					<li><a href="#">22</a></li>
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


	<!-- Widgets -->
	<div class="five columns">


		<!-- Location -->
		<div class="widget">
			<h4>Location</h4>
			<form action="#" method="get">
				<input type="text" name="provinsi" placeholder="Lokasi / Provinsi" value=""/>
				<input type="text" name="kota" placeholder="City" value=""/>


				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Job Type -->
		<div class="widget">
			<h4>Job Type</h4>

			<ul class="checkboxes">
				<li>
					<input id="check-1" type="checkbox" name="check" value="check-1" checked>
					<label for="check-1">Any Type</label>
				</li>
				<li>
					<input id="check-2" type="checkbox" name="check" value="check-2">
					<label for="check-2">Full-Time <span>(312)</span></label>
				</li>
				<li>
					<input id="check-3" type="checkbox" name="check" value="check-3">
					<label for="check-3">Part-Time <span>(269)</span></label>
				</li>
				<li>
					<input id="check-4" type="checkbox" name="check" value="check-4">
					<label for="check-4">Internship <span>(46)</span></label>
				</li>
				<li>
					<input id="check-5" type="checkbox" name="check" value="check-5">
					<label for="check-5">Freelance <span>(119)</span></label>
				</li>
			</ul>

		</div>





	</div>
	<!-- Widgets / End -->


</div>

@endsection