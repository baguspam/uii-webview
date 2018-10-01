<?php
dtb();
$queryUserRead = mysql_query("SELECT * FROM user WHERE username='".$busername."'");
$ReadUser = mysql_fetch_array($queryUserRead);
if (isset($_POST['simpan'])){
	//Deklarasi Variable
	$getPasswordLama = md5($_POST['password_lama']);
	$getPasswordBaru = md5($_POST['password_baru']);
	if($ReadUser['password']==$getPasswordLama){
		$queryUser = mysql_query("UPDATE user SET password='".$getPasswordBaru."' WHERE username='".$busername."'");
		if($queryUser){
		echo "<script>
				alert('Berhasil Diupdate');
			</script>";
		}else{
			echo "<script>
					 alert('Gagal Diupdate');
				</script>";
		}

	}else{
		echo "<script>
				 alert('Password Lama Salah');
			</script>";
	}


}
?>
	<div class="content-container animated fadeInUp">

		<div class="entry-main">
			<div class="col s12 offset-m1 m8 card-panel">
			
            <p>
            	<h3 style="text-align:center;">Ubah Password</h3>
            </p>
			<div class="divider"></div>
			<div class="entry-content" style="text-align:justify;">
				<form method="POST">
					<div class="input-field">
						<span class="icons">
							<i class="fa fa-lock"></i>
						</span>
						<input type="pasword" name="password_lama" placeholder="Password lama" class="input-form with-icons">
					</div>

					<div class="input-field">
						<span class="icons">
							<i class="fa fa-lock"></i>
						</span>
						<input type="pasword" name="password_baru" placeholder="Password Baru" class="input-form with-icons">
					</div>

					<div class="button-field">
						<button type="submit" name="simpan" class="button-form">Send</button>
					</div>
				</form>
			</div>
		</div>

			
		</div>

	</div>