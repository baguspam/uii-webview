<?php

if(empty($_GET['m'])){
	include "./b_kamus/awal.php";
}
if($_GET['m']=="about"){
	if(!empty($_GET['e'])=="edit"){
		include "./b_kamus/about.php";
	}else{
		include "./b_kamus/about.php";
	}
}


if($_GET['m']=="panduan"){
	if(!empty($_GET['e'])=="edit"){
		include "./b_kamus/panduan.php";
	}else{
		include "./b_kamus/panduan.php";
	}
}
if($_GET['m']=="kontak"){
	include "./b_kamus/kontak/kontak2.php";
}
if($_GET['m']=="profile"){
	include "./b_kamus/profile/profile.php";
}
if($_GET['m']=="ubah_password"){
	include "./b_kamus/profile/ubah_password.php";
}
if($_GET['m']=="logout"){
	include "../logout.php";
}

