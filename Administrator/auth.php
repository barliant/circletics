<?php
include('../config.php');

session_start();

//narik data pas login
$username = $_POST['username'];
$password = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);


//enkripsi password
$password=md5($password);

$query = mysql_query("select * from administrator where username='$username' and password='$password'");

$data = mysql_fetch_array($query);


if (mysql_num_rows($query) == 1) {
	//bikin session
	$_SESSION['id_admin'] = $data['ID_Admin'];
				//lempar ke panel admin
				header('location:panelAdmin.php');
		
} else { echo" <script language='JavaScript'> alert ('Akun anda tidak ada di database, coba kembali!');</script>";
	 echo '<script language="JavaScript"> window.location.href ="index.php" </script>';
}
?>