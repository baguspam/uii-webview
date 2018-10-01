<?php
//error_reporting(0);
include "../b_config/b_konek.php";
include "../b_config/b_tgl_indo.php";
session_start();
$blevel = $_SESSION["jenis"];
$busername = $_SESSION["username"];
$bemail = $_SESSION["email"];

?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<!--Header-->
	<?php include "css.php"; ?>
	<style type="text/css">
		body{
			background-color: #eee;
		}
		.top-navbar{
			background-color: #78909C;box-shadow: 0 0 6px rgba(140, 132, 132, 0.41);border-bottom: none;
		}
		.top-navbar .top-navbar-left a, .top-navbar .top-navbar-right a{
			color: #fff;
		}
		#slide-out-left, #slide-out-right{
			background-color: white;color: #000;
		}
		#slide-out-left li a, .collapsible-header,#slide-out-left .collapsible-body li a{
			color: #000;
		}
		#slide-out-right li a{
			color: #000;
			text-decoration: none;
		}#slide-out-right li {
			list-style: none;
			margin: 0 1.5rem;
			padding: 10px 0;
		}
		.footer {
		   position:absolute;
		   bottom:0;
		   width:100%;
		   height:60px;   /* Height of the footer */
		   background:#6cf;
		}
		.tabs{
			background:#fff;
		}
		.tabs .tab a, .tabs .tab a.active, .entry-content a{
			color: #000;
			text-decoration: none;
		}
		a{
			color: #000;
			text-decoration: none;
		}
	</style>
	<!--End Header-->
</head>

<body>
<div id="main">
	<!--Menu-->
	<?php include "menu.php"; ?>
	<!--End Menu-->
	
	<!--Content-->
	<?php include "content.php"; ?>
	<!--End Content-->

	<!--Footer-->
	<!-- <?php include "footer.php"; ?> -->
	<!--End Footer-->

</div><!-- #main -->
<!--Js-->
<?php include "js.php"; ?>
<!--End Js-->
</body>
</html>