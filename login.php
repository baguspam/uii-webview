<div class="content-container animated fadeInUp">
	<div class="col s6 offset-m1 m4 card-panel">
		<div class="page-header-container ">
			<h2 class="page-title"><?php echo $nama_aplikasi;?></h2>
			<div class="subtitle">Login to your account</div>
			<div class="redline"></div>
		</div>
		<form method="post">

		<div class="input-field">
			<span class="icons">
				<i class="fa fa-envelope"></i>
			</span>
			<input type="text" name="email" placeholder="Email" class="input-form with-icons">
		</div>

		<div class="input-field">
			<span class="icons">
				<i class="fa fa-lock"></i>
			</span>
			<input type="password" placeholder="Password" name="password" class="input-form with-icons">
		</div>

		<div class="button-field">
			<button name="login" type="submit" class="button-form">Login</button>
		</div>
		</form>
<!-- 
		<div class="button-field">
			<button type="button" name="submit" class="button-form facebook">Login with facebook</button>
		</div>

		<p class="text-center">Don't have an account? <a href="#">Sign up</a><br />
		Forgot your password? <a href="#">Get it back</a></p>
 -->

	</div>
</div>