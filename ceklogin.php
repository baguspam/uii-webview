<?php
if (isset($_POST['login'])){
	function antisqlfungsi($data){
		$filter_sql = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
		return $filter_sql;
	}

dtb();
// receiving the post params
$password=$_POST['password'];
$email=$_POST['email'];
//$level=substr(strrchr($email, "@"), 1);
$passwordEnkrip = md5($password);
echo $passwordEnkrip;
$queryLog=mysql_query("select * from user where password='".$passwordEnkrip."' and email='".$email."'");
$user = mysql_fetch_array($queryLog);
$rdLogCount = mysql_num_rows($queryLog);

if (empty($email) OR empty($password)) {
		echo "<script>alert('Maaf, Username dan Password tidak boleh ada yang kosong');</script>eee";
  } else {

        if ($user != false) {
            // use is found
    		session_start();
            $_SESSION["username"] = $user["username"];
            $_SESSION["jenis"] = $user["jenis"];
            $_SESSION["email"] = $user["email"];
            $_SESSION["status"] = $user["status"];
    		header('location:dashboard/');
        } else {
            // user is not found with the credentials
            echo "<script>alert('Maaf, Username dan Password Anda masukkan salah')</script>ooooo";

        }

	}

 }
		
?>
