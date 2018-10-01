<?php
dtb();
$queryUserRead = mysql_query("SELECT * FROM user WHERE username='".$busername."'");
$ReadUser = mysql_fetch_array($queryUserRead);
if (isset($_POST['simpan'])){
	//Deklarasi Variable
	$getEmail = $_POST['email'];
	$queryUser = mysql_query("UPDATE user SET email='".$getEmail."' WHERE username='".$busername."'");
	if($queryUser){
		echo "<script>
				 alert('Berhasil Diupdate');
			</script>";
	}else{
		echo "<script>
				 alert('Gagal Diupdate');
			</script>";

	}

}
?>
	<div class="content-container animated fadeInUp">

		<div class="entry-main">
			<div class="col s12 offset-m1 m8 card-panel">
			
            <p>
            	<h3 style="text-align:center;">Profil Saya</h3>
            </p>
			<div class="divider"></div>
			<div class="entry-content" style="text-align:justify;">
				<form method="POST">
					<div class="input-field">
						<span class="icons">
							<i class="fa fa-user"></i>
						</span>
						<input type="text" name="username" readonly="readonly" value="<?php echo $busername;?>" placeholder="Username" class="input-form with-icons">
					</div>

					<div class="input-field">
						<span class="icons">
							<i class="fa fa-envelope"></i>
						</span>
						<input type="text" name="email" value="<?php echo $ReadUser['email'];?>" placeholder="Email" class="input-form with-icons">
					</div>

					<div class="button-field">
						<button type="submit" name="simpan" class="button-form">Send</button>
					</div>
				</form>
			</div>
		</div>

			
		</div>

	</div>