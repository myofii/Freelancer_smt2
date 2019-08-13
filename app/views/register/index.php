
	<!--================Login Box Area =================-->
	<section class="login_box_area section_gap">
		<div class="container">
			
				
					<div class="login_form_inner">
						<h3>Register Form</h3>
						<form class="row login_form" action="<?= BASEURL ?>/register/userAdd" method="post" id="contactForm" novalidate="novalidate">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="address" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                            </div>
                            <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
							</div>
							<div class="col-md-12 form-group">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" name="regis" value="submit" class="primary-btn">Register</button>
								<a href="<?= BASEURL?>/login/api" class="text-primary">Login With Google</a><br>

								<div class="hover">
							<h4>Sudah Punya Akun ?</h4>
							<p>Kamu Bisa Klik Link Di Bawah ini</p>
							
					
								<a class="primary-btn" href="<?= BASEURL; ?>/login">Login</a>
									</div>

							</div>
						</form>
					</div>
				</div>
		
		</div>
	</section>
	<!--================End Login Box Area =================-->
