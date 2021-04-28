@extends('layout.master.master_page')
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

				<form action="{{ route('auth.signin') }}"  method="post" class="login">

					@csrf
					<div class="card-body">
						@if(session('errors'))
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								Something it's wrong:
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
								<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
								</ul>
							</div>
						@endif
						@if (Session::has('success'))
							<div class="alert alert-success">{{ Session::get('success') }}</div>
						@endif
						@if (Session::has('error'))
							<div class="alert alert-danger">{{ Session::get('error') }}</div>
						@endif

					<p class="form-row form-row-wide">
						<input class="input-text" type="Email" name="email_pelamar" id="Email" placeholder="E-mail"/>
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="password" name="password" id="password" placeholder="Password"/>
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
						<span>Belum mempunyai akun? <a href="/daftar"> Daftar Sekarang</a></span>
					</p>

					
				</form>
                <hr>
			</div>


				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Masuk</h3>
	
					<hr>
	
					<form method="post" class="login">
	
	
						<p class="form-row form-row-wide">
							<input class="input-text" type="Email" name="Email" id="Email" placeholder="E-mail"/>
						</p>

						<p class="form-row form-row-wide">
							<input class="input-text" type="password" name="password" id="password" placeholder="Password"/>
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
							<span>Belum mempunyai akun? <a href="/daftar"> Daftar Sekarang</a></span>
						</p>
	
						
					</form>
					<hr>
				</div>
		</div>
	</div>
</div>


@endsection