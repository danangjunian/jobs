@extends('layout.master.master_page')

@section('title', 'Resume')

@section('content')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="resume">
	<div class="container">
		<div class="ten columns">
			<div class="resume-titlebar">
				<img src="/images/resumes-list-avatar-01.png" alt="">
				<div class="resumes-list-content">
					<h4>Stiawan Jodi <span>Web Designer</span></h4>
					<span class="icons"><i class="fa fa-map-marker"></i> surabaya city</span>
					<span class="icons"><i class="fa fa-money"></i> $100 / hour</span>
					<span class="icons"><a href="http://founderbaca.rgijatim.com/"><i class="fa fa-link"></i> Website</a></span>
					<span class="icons"><a href="stiawan.jodi270695@gmail.com"><i class="fa fa-envelope"></i> stiawan.jodi270695@gmail.com</a></span>
					<div class="skills">
						<span>JavaScript</span>
						<span>PHP</span>
						<span>WordPress</span>
					</div>
					<div class="clearfix"></div>

				</div>
			</div>
		</div>

		<div class="six columns">
			<div class="two-buttons">

				<a href="#small-dialog" class="popup-with-zoom-anim button"><i class="fa fa-envelope"></i> Kirim Pesan</a>

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
					
				</div>
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

		<h3 class="margin-bottom-15">About Me</h3>

		<p class="margin-reset">
			The Food Service Specialist ensures outstanding customer service is provided to food customers and that all food offerings meet the required stock levels and presentation standards. Beginning your career as a Food Steward will give you a strong foundation in Speedway’s food segment that can make you a vital member of the front line team!
		</p>

		<br>

		<p>The <strong>Food Service Specialist</strong> will have responsibilities that include:</p>

		<ul class="list-1">
			<li>Excellent customer service skills, communication skills, and a happy, smiling attitude are essential.</li>
			<li>Must be available to work required shifts including weekends, evenings and holidays.</li>
			<li>Must be able to perform repeated bending, standing and reaching.</li>
			<li>Must be able to occasionally lift up to 50 pounds</li>
		</ul>

	</div>
	</div>


	<!-- Widgets -->
	<div class="eight columns">

		<h3 class="margin-bottom-20">Education</h3>

		<!-- Resume Table -->
		<dl class="resume-table">
			<dt>
				<small class="date">2012 - 2015</small>
				<strong>Bsc Computing at College of West jakarta</strong>
			</dt>
			<dd>
				<p>Captain, why are we out here chasing comets? Maybe we better talk out here; the observation lounge has turned into a swamp. Ensign Babyface!</p>
			</dd>

		
			<dt>
				<small class="date">2006 - 2010</small>
				<strong>GCSE something at King Edward 7th</strong>
			</dt>
			<dd>
				<p>Captain, why are we out here chasing comets? Maybe we better talk out here; the observation lounge has turned into a swamp. Ensign Babyface!</p>
			</dd>


			<dt>
				<small class="date">2004 - 2006</small>
				<strong>Test 2 at Test</strong>
			</dt>
			<dd>
				<p>Phasellus vestibulum metus orci, ut facilisis dolor interdum eget. Pellentesque magna sem, hendrerit nec elit sit amet, ornare efficitur est.</p>
			</dd>

		</dl>

	</div>

</div>

@endsection