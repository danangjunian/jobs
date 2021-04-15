@extends('layout.master.master_user')
	
@section('title', 'Atur Aplikasi')
	


@section ('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>Kelola Aplikasi</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li>Kelola Aplikasi</li>
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

		<p class="margin-bottom-25">List aplikasi pelamar</p>

		<table class="manage-table resumes responsive-table">

			<tr>
				<th><i class="fa fa-user"></i> Name</th>
				<th><i class="fa fa-file-text"></i> Title</th>
				<th><i class="fas fa-map-marker-alt"></i> Location</th>
				<th><i class="fas fa-calendar-alt"></i> Date Posted</th>
				<th><i class="fas fa-check-double"></i> Status Pelamar</th>
				<th><i class="fas fa-clipboard-list"></i>action</th>
			</tr>

			<!-- Item #1 -->
			<tr>
				<td class="title">Stiawan Jodi</td>
				<td>Crew store</td>
				<td>indonesia</td>
				<td>September 30, 2020</td>
				<td> Rejected </td>
				<td class="action">
					<a href="/resume-page" class="lihat"><i class="fas fa-eye"></i> Lihat</a>
					{{--  <a href="#" class="lihat"><i class="fas fa-check-double"></i> Beri keputusan</a>  --}}
					<a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
				</td>
			</tr>

			<!-- Item #1 -->

		</table>


	</div>

</div>


<!-- Footer
@endsection