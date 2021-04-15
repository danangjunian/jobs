@extends('layout.master.master_awal')
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
					<li><a href="/">Home</a></li>
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

				<h3 class="margin-bottom-10 margin-top-10">Masuk</h3>

                <hr>

				<form method="get" action="/index" class="login">


					<p class="form-row form-row-wide">
						<input class="input-text" type="Email" name="Email" id="Email" placeholder="E-mail"required/>
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="text" name="Phone" id="Phone" placeholder="+62" required/>
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="password" name="password" id="password" placeholder="Password" required/>
					</p>

					{{--  <p class="form-row">
						<input type="submit" class="button" name="login" value="Login" />  --}}
						<input type="submit" class="button" name="signup" value="Login" />
						<label for="SyaratKetentuan" class="SyaratKetentuane">
						<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
					</p> 

					<p style="text-align:center;" class="lost_password">
						<a href="#" >Lupa Password?</a>
					</p>
					<p style="text-align:center;" class="lost_password">
						<span>Belum mempunyai akun? <a href="/daftar"> Daftar Sekarang</a></span>
					</p>

					
				</form>
                <hr>
			</div>


				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Masuk</h3>
	
					<hr>
	
					<form method="get" action="/homepage_user" class="login">
	
	
						<p class="form-row form-row-wide">
							<input class="input-text" type="Email" name="Email" id="Email" placeholder="E-mail" required/>
						</p>

						<p class="form-row form-row-wide">
							<input class="input-text" type="password" name="password" id="password" placeholder="Password" required/>
						</p>
	
						<p class="form-row">
							<input type="submit" class="button" name="login" value="Login" required/>
	
							<label for="rememberme" class="rememberme">
							<input name="rememberme" type="checkbox" id="rememberme" value="forever" /> Remember Me</label>
						</p>
	
						<p style="text-align:center;" class="lost_password">
							<a href="#" >Lupa Password?</a>
						</p>
						<p style="text-align:center;" class="lost_password">
							<span>Belum mempunyai akun? <a href="/daftar-awal"> Daftar Sekarang</a></span>
						</p>
	
						
					</form>
					<hr>
				</div>
		</div>
	</div>
</div>


@endsection