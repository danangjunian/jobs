@extends('layout.master2')
@section('title', 'daftar')
@section('content')




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
			<li class=""><a href="#tab1">Login</a></li>
			<li><a href="#tab2">Register</a></li>
		</ul>

		<div class="tabs-container">
			<!-- Login -->
			<div class="tab-content" id="tab1" style="display: none;">

                <h3 class="margin-bottom-10 margin-top-10">Register</h3>

                <form method="post" class="register">
                        
                    <div id="gridlum">
                        <div><label for="reg_email">Email Address:</label>
                        <input type="email" class="input-text" name="email" id="reg_email" value="" /></div>
                        <div><label for="reg_email">Email Address:</label>
                        <input type="email" class="input-text" name="email" id="reg_email" value="" /></div>
                        <div><label for="reg_password">Password:</label>
						<input type="password" class="input-text" name="password" id="reg_password" /></div>
                </div>

                    
                    <p class="form-row form-row-wide">
                        <label for="reg_password">Password:</label>
                        <input type="password" class="input-text" name="password" id="reg_password" />
                    </p>

                    <p class="form-row form-row-wide">
                        <label for="reg_password2">Repeat Password:</label>
                        <input type="password" class="input-text" name="password" id="reg_password2" />
                    </p>

                                
                    <p class="form-row">
                        <input type="submit" class="button" name="register" value="Register" />
                    </p>
                    
                </form>
            </div>

				<!-- Register -->
				<div class="tab-content" id="tab2" style="display: none;">

					<h3 class="margin-bottom-10 margin-top-10">Register</h3>

					<form method="post" class="register">
						
						<p class="form-row form-row-wide">
							<label for="reg_email">Email Address:</label>
							<input type="email" class="input-text" name="email" id="reg_email" value="" />
                            <label for="reg_password">Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password" />
						</p>

						
						<p class="form-row form-row-wide">
							<label for="reg_password">Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password" />
						</p>

						<p class="form-row form-row-wide">
							<label for="reg_password2">Repeat Password:</label>
							<input type="password" class="input-text" name="password" id="reg_password2" />
						</p>

									
						<p class="form-row">
							<input type="submit" class="button" name="register" value="Register" />
						</p>
						
					</form>
				</div>
		</div>
	</div>
</div>

@endsection