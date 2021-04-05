@extends('layout.master2')
@section('title', 'Masuk')
@section('content')




<!-- Titlebar
================================================== -->
<div id="titlebar" class="single">
	<div class="container">

		<div class="sixteen columns">
			<h2>My Account</h2>
			<nav id="breadcrumbs">
				<ul>
					<li>You are here:</li>
					<li><a href="#">Home</a></li>
					<li>My Account</li>
				</ul>
			</nav>
		</div>

	</div>
</div>


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">Cari <u>lowongan</u></a></li>
			<li><a href="#tab2">Cari <u>talenta</u></a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Login</h3>
					
				<form method="post" class="login">

					
					<p class="form-row form-row-wide">
						<label for="username">Username or Email Address:</label>
						<input type="text" class="input-text" name="username" id="username" value="" />
					</p>

					<p class="form-row form-row-wide">
						<label for="password">Password:</label>
						<input class="input-text" type="password" name="password" id="password" />
					</p>

					<p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />

						<label for="rememberme" class="rememberme">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p>

				
					
					
		
					<p style="text-align:center;" class="lost_password">
						<a href="#" >Lupa Password?</a>
					</p>
					<p style="text-align:center;" class="lost_password">
						<a href="#" >Daftar Sekarang</a>
					</p>

					
				</form>
			</div>

				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Login</h3>
	
					<form method="post" class="login">
	
						
						<p class="form-row form-row-wide">
							<label for="username">Username or Email Address:</label>
							<input type="text" class="input-text" name="username" id="username" value="" />
						</p>
	
						<p class="form-row form-row-wide">
							<label for="password">Password:</label>
							<input class="input-text" type="password" name="password" id="password" />
						</p>
	
						<p class="form-row">
							<input type="submit" class="button" name="login" value="Login" />
	
							<label for="rememberme" class="rememberme">
							<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
						</p>

	
						<p style="text-align:center;" class="lost_password">
							<a href="#" >Lupa Password?</a>
						</p>
						<p style="text-align:center;" class="lost_password">
							<a href="#" >Daftar Sekarang</a>
						</p>
	
	
						
					</form>
				</div>
		</div>
	</div>
</div>


@endsection