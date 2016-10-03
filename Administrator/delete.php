<?php 
include('../config.php');

$uid = strip_tags(base64_decode($_GET["page_owner"]));

$query = mysql_query("delete infouser,userlogin,interest_pemrograman FROM infouser LEFT JOIN userlogin ON infouser.ID_User=userlogin.ID_User
LEFT JOIN interest_pemrograman ON
userlogin.ID_User=interest_pemrograman.ID_User WHERE infouser.ID_User= '$uid'") or die(mysql_error());

if ($query) {
	// jika berhasil ngapus
	echo" <script language='JavaScript'> alert ('Akun sudah dihapus!');</script>";
	echo '<script language="JavaScript"> window.location.href ="showUsers.php" </script>';
} else {
	// jika gagal ngapus
	 echo" <script language= 'JavaScript'> alert ('Penghapusan akun gagal!'); </script>";
	 echo '<script language="JavaScript"> window.location.href ="showUsers.php" </script>';
}
?>