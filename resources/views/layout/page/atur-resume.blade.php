@extends('layout.master.master_page')
	
@section('title', 'Atur Resume')
	


@section ('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Pengaturan Resume</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="/index">Home</a></li>
					<li>Atur Resume</li>
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

		<p class="margin-bottom-25">Resume Anda dapat dilihat, diedit atau dihapus di bawah ini.</p>

		<table class="manage-table resumes responsive-table">

			<tr>
				<th><i class="fa fa-user"></i> Nama</th>
				<th><i class="fa fa-file-text"></i> Jabatan Terakhir</th>
				<th><i class="fas fa-map-marker-alt"></i> Lokasi</th>
				<th><i class="fas fa-calendar-alt"></i> Tanggal Update</th>
				<th></th>
			</tr>

			<!-- Item #1 -->
			<tr>
				<td class="title">STIAWAN JODI</td>
				<td>Crew Store</td>
				<td>indonesia</td>
				<td>September 30, 2020</td>
				<td class="action">
					<a href="/add-cv" class="edit"><i class="fas fa-pencil-alt"></i> Edit</a>
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>

			<!-- Item #1 -->

		</table>

		<br>

		<a href="/add-cv" class="button">Tambah Resume</a>

	</div>

</div>


<!-- Footer
@endsection