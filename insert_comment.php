<?php 
session_start();
include_once('config.php');

$ID_User		= $_SESSION['iduser'];
$ID_User_teman	= $_POST['ID_User_teman'];
$tanggal		= date("H:i d M Y");
$comment		= $_POST['comment'];

$query = mysql_query("insert into comment values('', '$ID_User', '$ID_User_teman', '$tanggal', '$comment')"); 

if ($query) {
		//kalo berhasil nyimpen
		echo" <script language='JavaScript'> alert ('Info berhasil di share!');</script>";
		echo '<script language="JavaScript"> window.location.href ="profile_page.php?page_owner='.base64_encode($ID_User_teman).' ";</script>';
} else {
	//kalo gagal nyimpen
	 echo" <script language= 'JavaScript'> alert ('info gagal di share, coba lagi!'); </script>";
}
?>
