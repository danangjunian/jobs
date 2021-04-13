@extends('layout.master.master_page')

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
					<li><a href="/">Home</a></li>
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
	<div class="sixteen columns">

		<p class="margin-bottom-25">Daftar Anda ditampilkan pada tabel di bawah ini. Cantuman yang kedaluwarsa akan otomatis dihapus setelah 30 hari.</p>

		<table class="manage-table responsive-table">

			<tr>
				<th><i class="fa fa-file-text"></i> Judul</th>
				<th><i class="fa fa-check-square-o"></i> Terisi</th>
				<th><i class="fas fa-calendar-alt"></i></i> Tanggal Posted</th>
				<th><i class="fas fa-calendar-alt"></i></i> Tanggal Expired</th>
				<th><i class="fa fa-user"></i> Application</th>
				<th></th>
			</tr>
					
			<!-- Item #1 -->
			<tr>
				<td class="title"><a href="#">Marketing Coordinator - SEO / SEM Experience <span class="pending">(Pending Approval)</span></a></td>
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
				<td class="title"><a href="#">Web Developer - Front End Web Development, Relational Databases</a></td>
				<td class="centered">-</td>
				<td>September 30, 2020</td>
				<td>October 10, 2020</td>
				<td class="centered"><a href="manage-applications.html" class="button">Show (4)</a></td>
				<td class="action">
					<a href="#"><i class="fa fa-pencil"></i> Edit</a>
					<a href="#"><i class="fa  fa-check "></i> Mark Filled</a>
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>	

			<!-- Item #2 -->
			<tr>
				<td class="title"><a href="#">Power Systems User Experience Designer</a></td>
				<td class="centered"><i class="fa fa-check"></i></td>
				<td>May 16, 2020</td>
				<td>June 30, 2020</td>
				<td class="centered"><a href="manage-applications.html" class="button">Show (9)</a></td>
				<td class="action">
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>

		</table>

		<br>
		<a href="/add-jobs" class="button">Add Job</a>

	</div>

</div>

@endsection