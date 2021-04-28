@extends('layout.master.master_user')

@section('title', 'cari pekerjaan')



<!-- Header === -->

<!-- Content=== -->

@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar">
	<div class="container">
		<div class="ten columns">
			<span>Weve found 1 resumes for:</span>
			<h2>Crew store, Pelayan & Services</h2>
		</div>

		<div class="six columns">
			<a href="/tambah/pekerjaan" class="button">Post lowongan kerja, gratis!</a>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	<!-- Recent Jobs -->
	<div class="eleven columns">
	<div class="padding-right">
		
		<form action="#" method="get" class="list-search">
			<button><i class="fa fa-search"></i></button>
			<input type="text" placeholder="Search freelancer services (e.g. logo design)" value=""/>
			<div class="clearfix"></div>
		</form>

		<ul class="resumes-list">

			<li><a href="/resume-page">
				<img src="https://media.suara.com/pictures/653x366/2020/12/25/36001-skin-black-panther-fortnite.jpg" alt="">
				<div class="resumes-list-content">
					<h4>Stiawan Jodi <span>Crew Store</span></h4>
					<span><i class="fa fa-map-marker"></i> Surabaya</span>
					<span><i class="fa fa-money"></i> Rp. 4.200.000 / bulan</span>
					<p>3 tahun lebih bekerja di bidang pelayanan dan service, dan termotivasi untuk bisa bekerja lebih baik dari hari kemarin dengan belajar hal-hal baru,
						
					</p>

					<div class="skills">
						<span>JavaScript</span>
						<span>PHP</span>
						<span>WordPress</span>
						<span>Komunikasi</span>
					</div>
					<div class="clearfix"></div>

				</div>
				</a>
				<div class="clearfix"></div>
			</li>
				

		</ul>
		<div class="clearfix"></div>

		<div class="pagination-container">
			<nav class="pagination">
				<ul>
					<li><a href="#" class="current-page">1</a></li>
					{{--  <li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li class="blank">...</li>
					<li><a href="#">8</a></li>  --}}
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

		<!-- Sort by -->
		<div class="widget">
			<h4>Sort by</h4>

			<!-- Select -->
			<select data-placeholder="Choose Category" class="chosen-select-no-single">
				<option selected="selected" value="recent">Relevance</option>
				<option value="">kategori pekerjaan</option>
				<option value="">lama bekerja</option>
				<option value="">Pendidikan</option>
				<option value="">usia</option>
			</select>

		</div>

		<!-- Skills -->
		<div class="widget">
			<h4>Skills</h4>

			<!-- Select -->
			<form action="#" method="get">
				<select data-placeholder="pilih Skill" class="chosen-select" multiple>
					<option value="">Adobe Photoshop</option>
					<option value="">PHP</option>
					<option value="">HTML</option>
					<option value="">CSS</option>
					<option value="">JavaScript</option>
					<option value="">jQuery</option>
					<option value="">MySQL</option>
					<option value="">WordPress</option>
					<option value="">Misc office</option>
					<option value="">Akuntansi</option>
				</select>
				<div class="margin-top-15"></div>
				<button class="button">Filter</button>
			</form>
		</div>

		<!-- Location -->
		<div class="widget">
			<h4>Lokasi</h4>
			<form action="#" method="get">
				<input type="text" placeholder=" provinsi" value=""/>
				<input type="text" placeholder="kota" value=""/>

				<button class="button">Filter</button>
			</form>
		</div>

	</div>
	<!-- Widgets / End -->


</div>

@endsection