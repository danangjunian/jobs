@extends('layout.master.master_user')

@section('title', 'Pemberitahuan Pekerjaan')



<!-- Header === -->


@section('content')


<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Kelola Pekerjaan</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="/homepage_user">Home</a></li>
					<li>Dasbor Pekerjaan</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">
	
	<!-- Table -->
	<p class="margin-bottom-25">Daftar Anda ditampilkan pada tabel di bawah ini. Cantuman yang kedaluwarsa akan otomatis dihapus setelah 30 hari.</p>
	<div class="sixteen columns">

		<table class="manage-table responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i> Judul</th>
				<th><i class="fa fa-check-square-o"></i> Terisi</th>
				<th><i class="fas fa-calendar-alt"></i></i> Tanggal Posted</th>
				<th><i class="fas fa-calendar-alt"></i></i> Tanggal Expired</th>
				<th><i class="fa fa-user"></i> Applikasi Masuk</th>
				<th></th>
			</tr>
					
			<!-- Item #1 -->
			<tr>
				<td class="title">Marketing Coordinator - SEO / SEM Experience <span class="pending">(Close job)</span></td>
				<td class="centered">-</td>
				<td>September 30, 2020</td>
				<td>October 10, 2020</td>
				<td class="centered">-</td>
				<td class="action">
					<a href="/kelola-jobs" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>
					
			<!-- Item #2 -->
			<tr>
				<td class="title">Pelayanan - Service - Crew Store <span class="pending">(Postingan)</span></td>
				<td class="centered">-</td>
				<td>September 30, 2020</td>
				<td>October 10, 2020</td>
				<td class="centered"><a href="/atur-aplikasi" class="button">Show (1)</a></td>
				<td class="action">
					<a href="/tambah-pekerjaan"><i class="fas fa-pencil-alt"></i> Edit</a>
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>	

		</table>

		<br>
		<a href="/tambah-pekerjaan" class="button">Add Job</a>

	</div>

</div>

@endsection