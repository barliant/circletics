<?php 
session_start();
include_once('config.php');


$ID_User	= $_SESSION['iduser'];
$tanggal	= date("H:i d M Y");
$info		= $_GET['info'];

$query = mysql_query("insert into shareinfo values('', '$ID_User','$tanggal', '$info')"); 

if ($query) {
		//kalo berhasil nyimpen
		echo" <script language='JavaScript'> alert ('Info berhasil di share!');</script>";
		echo '<script language="JavaScript"> window.location.href ="home.php" </script>';
} else {
	//kalo gagal nyimpen
	 echo" <script language= 'JavaScript'> alert ('info gagal di share, coba lagi!'); </script>";
}
?>