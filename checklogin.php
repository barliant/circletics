<?php
include('config.php');

session_start();

//narik data dari form
$username = $_POST['username'];
$password = $_POST['password'];


$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


//enkripsi password
$password=md5($password);

$query = mysql_query("select * from userlogin,infouser where userlogin.ID_User = infouser.ID_User AND username='$username' and password='$password'");

$data = mysql_fetch_array($query);


if (mysql_num_rows($query) == 1) {
	//bikin session buat user
	$_SESSION['username'] = $username;
	$_SESSION['iduser'] = $data['ID_User'];
			$_SESSION["VALID_USER_ID"] = $data["ID_User"];
		$_SESSION["USER_FULLNAME"] = strip_tags($data["fullname"]);
				// redirect ke halaman
				header('location:korelasi.php');
		
} else { echo" <script language='JavaScript'> alert ('Akun anda tidak ada di database, coba kembali!');</script>";
	 echo '<script language="JavaScript"> window.location.href ="index.html" </script>';
}
?>