<?php 
session_start();
include_once('config.php');

$ID_User		= $_SESSION['iduser'];
$tanggal		= date("H:i d M Y");
$judul			= $_POST['judul'];
$info			= $_POST['info'];
$tags			= $_POST['tags'];

$query = mysql_query("insert into lowongan_kerja values('', '$ID_User', '$tanggal', '$judul', '$info', '$tags')"); 

if ($query) {
		//kalo berhasil nyimpen
		echo" <script language='JavaScript'> alert ('Info lowongan berhasil di share!');</script>";
		echo '<script language="JavaScript"> window.location.href ="home.php";</script>';
} else {
	//kalo gagal nyimpen
	 echo" <script language= 'JavaScript'> alert ('info lowongan gagal di share, coba lagi!'); </script>";
	 echo '<script language="JavaScript"> window.location.href ="form_lowongan.php";</script>';
}
?>
