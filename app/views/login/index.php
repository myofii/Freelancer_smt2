
	<!--================Login Box Area =================-->
	<body style="background-color:black;background-image:url(../public/img/background.jpg);background-size:cover">

	<section class="login_box_area section_gap">
		<div class="container">
		<center>
					<div class="login_form_inner" style="background-color: #ffffff">
						<h3>HALAMAN LOGIN</h3>
						<form class="row login_form" action="<?= BASEURL ?>/login/cek" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" name="login" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a><br>
								<div class="hover">
							<h4>Tidak Punya Akun ?</h4>
							<p>Kamu Bisa Klik Link Di Bawah ini</p>
							
					
								<a class="primary-btn" href="<?= BASEURL; ?>/register">Buat Akun</a>
									</div>
								<a href="http://localhost/Freelancer/app/config/config_google.php" class="text-primary">Login With Google</a>
							</div>
						</form>
					</div>
				
		</center>
		</div>
	</section>
	<!--================End Login Box Area =================-->
</body>