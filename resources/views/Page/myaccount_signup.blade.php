@extends('layout.master2')
@section('title', 'Daftar')
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



<div class="container">

	<div class="my-account">

		<ul class="tabs-nav">
			<li class=""><a href="#tab1">untuk<u> pelamar </u></a></li>
			<li><a href="#tab2">untuk<u> perusahaan</u></a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Daftarkan Diri Anda Untuk Mendapatkan Pekerjaan :</h3>

                <hr>

				<form method="post" class="singup">

					
					<p class="form-row form-row-wide">
						<input type="text" class="input-text" name="username" id="username" value="" placeholder="Nama Depan"/>
					</p>

					<p class="form-row form-row-wide">
						<input class="input-text" type="text" name="NamaBelakang" id="NamaBelakang" placeholder="Nama Belakang" />
					</p>

					<p class="form-row form-row-wide">
						<input class="input-text" type="Email" name="Email" id="Email" placeholder="E-mail"/>
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="text" name="Phone" id="Phone" placeholder="+62"/>
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="password" name="password" id="password" placeholder="Password"/>
					</p>

					<p class="form-row">
						<input type="submit" class="button" name="signup" value="Daftar" />

						<label for="SyaratKetentuan" class="SyaratKetentuan">
						<input style="margin: 14px 0 0 0" name="SyaratKetentuan" type="checkbox" id="SyaratKetentuan" value="forever" /> Baca <a href="#">Syarat dan Ketentuan</a></label>
					</p>

				
					<p style="text-align:center;" class="lost_password">
						<span>Sudah Mempunyai Akun? <a href="/masuk"> Masuk</a></span> 
					</p>

					
				</form>
                <hr>
			</div>

				<!-- Register -->
                <div class="tab-content" id="tab2" style="display: none;">

                    <h3 class="margin-bottom-10 margin-top-10">Daftarkan Perusahaan Anda :</h3>
    
                    <hr>
    
                    <form method="post" class="login">
    
                        
                        <p class="form-row form-row-wide">
                            <input type="text" class="input-text" name="NamaPerusahaan" id="NamaPerusahaan" placeholder="Nama Perusahaan"/>
                        </p>
    
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="Email" name="Email" id="Email" placeholder="E-mail"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="text" name="Phone" id="Phone" placeholder="+62"/>
                        </p>
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="password" name="password" id="password" placeholder="Password"/>
                            
                        </p>
    
                        <p class="form-row">
                            <input type="submit" class="button" name="signup" value="Daftar" />
    
                            <label for="SyaratKetentuan" class="SyaratKetentuan">
                            <input style="margin: 14px 0 0 0" name="SyaratKetentuan" type="checkbox" id="SyaratKetentuan" value="forever" /> Baca <a href="#">Syarat dan Ketentuan</a></label>
                        </p>
    
                    
                        <p style="text-align:center;" class="lost_password">
                            <span>Sudah Mempunyai Akun? <a href="/"> Masuk</a></span> 
                        </p>
    
                        
                    </form>
                    <hr>
                </div>
		</div>
	</div>
</div>


@endsection