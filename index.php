<?php
//error_reporting(0);
include "b_config/b_konek.php";
include "b_config/b_tgl_indo.php";

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<!--Header-->
	<?php include "./dashboard/css.php"; ?>
	<!--End Header-->
	<style type="text/css">
		body{
			background-image: url('assets/images/bg.jpg');
		}
	</style>
</head>

<body>
<div id="main" style="padding: 10dp">

	<?php include "./ceklogin.php"; ?>
	<br><br>
	<!--Content-->
	<?php include "./login.php"; ?>

</div><!-- #main -->


<!--Js-->
<?php include "./dashboard/js.php"; ?>
<!--End Js-->
</body>
</html>