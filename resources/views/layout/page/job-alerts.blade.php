@extends('layout.master.master_page')

@section('title', 'Pemberitahuan Pekerjaan')



<!-- Header === -->


@section('content')


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Pemberitahuan pekerjaan</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="/">Home</a></li>
					<li>Pemberitahuan Pekerjaan</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<div class="sixteen columns">

		<p class="margin-bottom-25">Pemberitahuan pekerjaan anda ditampilkan di bawah ini.</p>

		<table class="manage-table resumes responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i> Nama Perusahaan</th>
				<th><i class="fas fa-calendar-alt"></i> Tanggal Apply</th>
				<th><i class="fa fa-tags"></i> Judul Pekerjaan</th>
				<th><i class="fas fa-map-marker-alt"></i></i> Lokasi</th>
				<th><i class="fas fa-check-circle"></i> Status</th>

			</tr>

			<!-- Item #1 -->
			<tr>
				<td class="alert-name">MCDonalds</td>
				<td>September 30, 2020</td>
				<td class="keywords">crew restaurant</td>
				<td>Surabaya</td>
				<td>Applikasi Terkirim</td>


			</tr>

		</table>

		<br>
{{-- 
		<a href="#small-dialog" class="popup-with-zoom-anim button">Add Alert</a>

		<div id="small-dialog" class="zoom-anim-dialog mfp-hide apply-popup">
			<div class="small-dialog-headline">
				<h2>Add Alert</h2>
			</div>

			<div class="small-dialog-content">
				<form action="#" method="get" >
					<input type="text" name="alert-name" placeholder="Alert Name" value=""/>
					<input type="text" name="keyword" placeholder="Keyword" value=""/>
					<input type="text" name="lokasi" placeholder="Location" value=""/>

					<!-- Select -->
					<select data-placeholder="Email Frequency" class="chosen-select-no-single">
						<option value="">Email Frequency</option>
						<option value="1">Daily</option>
						<option value="2">Weekly</option>
						<option value="3">Fortnightly</option>
					</select>

					<div class="clearfix"></div>
					<div class="margin-top-15"></div>

					<!-- Select -->
					<select data-placeholder="Job Type" class="chosen-select" multiple>
						<option value="1">Full-Time</option>
						<option value="2">Part-Time</option>
						<option value="3">Internship</option>
						<option value="4">Freelance</option>
						<option value="5">Temporary</option>
					</select>

					<div class="margin-top-20"></div>
					<div class="divider"></div>

					<button class="send">Save Alert</button>
				</form>
			</div>
		</div> --}}
	</div>

</div>

@endsection