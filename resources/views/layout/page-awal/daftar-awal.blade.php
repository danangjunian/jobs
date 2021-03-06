@extends('layout.master.master_awal')
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
			<!-- register baru -->
			<div class="tab-content" id="tab1" style="display: none;">

				<h3 class="margin-bottom-10 margin-top-10">Daftarkan Diri Anda Untuk Mendapatkan Pekerjaan :</h3>

                <hr>

				<form method="post" action="{{ route('auth.pelamar') }}" class="singup">
					{{ csrf_field() }}
					
					<p class="form-row form-row-wide">
						<input type="text" class="input-text" name="nama_pelamar" id="username" value="" placeholder="Nama Depan"/>
					</p>

					<p class="form-row form-row-wide">
						<input class="input-text" type="Email" name="email_pelamar" id="Email" placeholder="E-mail" required/>
					</p>
					<p class="form-row form-row-wide">
						<input class="input-text" type="password" name="password" id="password" placeholder="Password" required/>
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
    
					<form method="post" action="{{ route('auth.perusahaan') }}" class="login">
                        {{ csrf_field() }}
                        <p class="form-row form-row-wide">
                            <input type="text" class="input-text" name="nama_pendaftar" id="NamaPerusahaan" placeholder="Nama Perusahaan" required/>
                        </p>
    
                        <p class="form-row form-row-wide">
                            <input class="input-text" type="Email" name="email_perusahaan" id="Email" placeholder="E-mail" required/>
                        </p>

                        <p class="form-row form-row-wide">
                            <input class="input-text" type="password" name="password" id="password" placeholder="Password" required/>
                            
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
		</div>
	</div>
</div>


@endsection