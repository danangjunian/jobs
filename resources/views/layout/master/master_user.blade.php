<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')  |  Lawang - Lowongan Pekerjaan</title>
	<link rel="icon" type="image/png" href="images/logo.png"/>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/colors/orange.css" id="colors">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	
    
</head>

<body>
	<div id="wrapper">
		<!-- Header
================================================== -->

<header>
	<div class="container">
		<div class="sixteen columns">
			<!-- Logo -->
			<div id="logo">
				<h1><a href="/index"><img src="images/awang.png" alt="lawang" /></a></h1>
			</div>
			<!-- Menu -->
			<nav id="navigation" class="menu">
				<ul id="responsive">
							<li><a href="/add-jobs">Tambah pekerjaan</a></li>
							<li><a href="/kelola-jobs">Kelola pekerjaan</a></li>
							<li><a href="manage-applications.html">Kelola Applikasi</a></li>
							<li><a href="browse-resumes.html">Cari Resume</a></li>
				</ul>
				<ul class="float-right">
					<li style=" margin-right: 20px;"> <a href="#"> <i class="fa fa-user"></i> Stiawan jodi</a>
					<ul>
						<li>
							<li><a href="/"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
						</li>
					</ul>
					
					</li>
					
				</ul>

			</nav>

			<!-- Navigation -->
			<div id="mobile-navigation">
				<a href="#menu" class="menu-trigger"><i class="fa fa-reorder"></i> Menu</a>
			</div>
		</div>
	</div>
</header>
<div class="clearfix"></div>


		<!-- Content
================================================== -->

@yield('content')

	
<!-- Footer
================================================== -->
<div class="margin-top-15"></div>

<div id="footer">
	<!-- Main -->
	<div class="container">

		<div class="seven columns">
			<h4>About</h4>
			<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita suscipit numquam rem blanditiis accusantium asperiores quidem enim. Minima deserunt obcaecati alias esse aspernatur necessitatibus ullam dignissimos aliquam? Numquam, illum optio.</p>
			<a href="/daftar" class="button">belum tau</a>
		</div>
	</div>
</div>
