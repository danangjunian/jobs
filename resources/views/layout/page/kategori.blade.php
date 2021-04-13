@extends('layout.master.master_page')
	
@section('title', 'Category')
	


@section ('content')
<div id="titlebar" class="photo-bg" style="background-image: url(images/all-categories-photo.jpg);">
	<div class="container">
		<div class="ten columns">
			<h2>All Categories</h2>
		</div>

		<div class="six columns">
			<a href="add-job.html" class="button">Post a Job, It’s Free!</a>
		</div>

	</div>
</div>


<!-- Categories -->
		<div class="container">
			<div class="sixteen columns">
				<h3 class="margin-bottom-25"><strong>Semua Category</strong></h3>
				<ul id="popular-categories">
					<li><a href="/browse-jobs"><i class="far fa-money-bill-alt"></i> Akuntansi / Keuangan</a></li>
					<li><a href="/browse-jobs"><i class="fa fa-wrench"></i> Mekanik / Otomotive</a></li>
					<li><a href="/browse-jobs"><i class="fa fa-building"></i> K3 & HSE / kontruksi  </a></li>
					<li><a href="/browse-jobs"><i class="fa fa-graduation-cap"></i> Pendidikan </a></li>
					<li><a href="/browse-jobs"><i class="fa fa-medkit"></i> Kesehatan</a></li>
					<li><a href="/browse-jobs"><i class="fas fa-utensils"></i> Restoran / Pelayan Restoran</a></li>
					<li><a href="/browse-jobs"><i class="fas fa-bus"></i> Transportasi / Logistik</a></li>
					<li><a href="/browse-jobs"><i class="fa fa-laptop"></i> Telekomukiasi / Ilmu Teknologi</a></li>
                    <li><a href="/browse-jobs"><i class="fa fa-laptop"></i> Programmer</a></li>
                    <li><a href="/browse-jobs"><i class="fas fa-handshake"></i> Freelance </a></li>
                    <li><a href="/browse-jobs"><i class="fas fa-palette"></i> Seni / Desain / Fashion</a></li>
                    <li><a href="/browse-jobs"><i class="fas fa-chalkboard-teacher"></i> Startup & Fintech</a></li>
				</ul>

				<div class="clearfix"></div>
				
				<div class="margin-bottom-50"></div>
			</div>
		</div>
<!-- End -- Categories -->


<!-- all Categories -->

<div id="categories">
	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Web, Software & IT</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">PHP</a></li>
					<li><a href="/browse-jobs">Android</a></li>
					<li><a href="/browse-jobs">WordPress</a></li>
					<li><a href="/browse-jobs">Design</a></li>
					<li><a href="/browse-jobs">Developer</a></li>
					<li><a href="/browse-jobs">iOS</a></li>
					<li><a href="/browse-jobs">Mobile</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">MySQL</a></li>
					<li><a href="/browse-jobs">JavaScript</a></li>
					<li><a href="/browse-jobs">Software</a></li>
					<li><a href="/browse-jobs">Website Design</a></li>
					<li><a href="/browse-jobs">Programming</a></li>
					<li><a href="/browse-jobs">SEO</a></li>
					<li><a href="/browse-jobs">Java</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">CSS</a></li>
					<li><a href="/browse-jobs">HTML5</a></li>
					<li><a href="/browse-jobs">Web Development</a></li>
					<li><a href="/browse-jobs">Web Design</a></li>
					<li><a href="/browse-jobs">eCommerce</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Design, Art & Multimedia</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">Design</a></li>
					<li><a href="/browse-jobs">Logo Design</a></li>
					<li><a href="/browse-jobs">Graphic Design</a></li>
					<li><a href="/browse-jobs">Video</a></li>
					<li><a href="/browse-jobs">Adnimation</a></li>
					<li><a href="/browse-jobs">Adobe Photoshop</a></li>
					<li><a href="/browse-jobs">Illustration</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">Art</a></li>
					<li><a href="/browse-jobs">3D</a></li>
					<li><a href="/browse-jobs">Adobe Illustrator</a></li>
					<li><a href="/browse-jobs">Drawing</a></li>
					<li><a href="/browse-jobs">Web Design</a></li>
					<li><a href="/browse-jobs">Cartoon</a></li>
					<li><a href="/browse-jobs">Graphics</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">Fashion Design</a></li>
					<li><a href="/browse-jobs">WordPress</a></li>
					<li><a href="/browse-jobs">Editing</a></li>
					<li><a href="/browse-jobs">Writing</a></li>
					<li><a href="/browse-jobs">T-Shirt Design</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Categories Group -->
	<div class="categories-group">
		<div class="container">
			<div class="four columns"><h4>Sales & Marketing</h4></div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">Display Advertising</a></li>
					<li><a href="/browse-jobs">Email Marketing</a></li>
					<li><a href="/browse-jobs">Lead Generation</a></li>
					<li><a href="/browse-jobs">Market & Customer Research</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">Marketing Strategy</a></li>
					<li><a href="/browse-jobs">Public Relations</a></li>
					<li><a href="/browse-jobs">Telemarketing & Telesales</a></li>
					<li><a href="/browse-jobs">Other - Sales & Marketing</a></li>
				</ul>
			</div>
			<div class="four columns">
				<ul>
					<li><a href="/browse-jobs">SEM - Search Engine Marketing</a></li>
					<li><a href="/browse-jobs">SEO - Search Engine Optimization</a></li>
					<li><a href="/browse-jobs">SMM - Social Media Marketing</a></li>
				</ul>
			</div>
		</div>
	</div>

</div>

<!-- Infobox -->
<div class="infobox">
	<div class="container">
		<div class="sixteen columns">Bangun karirmu bersama lawang <a href="/daftar"> Sekarang</a></div>
	</div>
</div>


@endsection