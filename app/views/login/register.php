<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" action="<?= BASEURL; ?>/Login/input_user" method="post">
					<span class="login100-form-title p-b-55">
						Register Freelancer
					</span>

					<div class="wrap-input100 validate-input m-b-16" >
						<input class="input100" type="text" name="nama_lengkap" placeholder="Nama Lengkap">
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
					</div>


					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="name" placeholder="Username">
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
					</div>


					<div class="wrap-input100 validate-input m-b-16">
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
					</div>

					<div class="container-login100-form-btn p-t-25">
						<button class="login100-form-btn">
							Register
						</button>
					</div>
					<div class="text-center w-full p-t-115">
						<span class="txt1">
							Have an account?
						</span>

						<a class="txt1 bo1 hov1" href="<?= BASEURL; ?>/login">
							Login now						
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>