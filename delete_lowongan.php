<?php 
include('config.php');
$uid = $_GET['id_lowongan'];

$query = mysql_query("delete from lowongan_kerja where id_lowongan='$uid'") or die(mysql_error());

if ($query) {
	echo" <script language='JavaScript'> alert ('Lowongan berhasil di hapus!');</script>";
		echo '<script language="JavaScript"> window.location.href ="home.php";</script>';
} else {
	 echo" <script language= 'JavaScript'> alert ('Lowongan gagal di hapus!'); </script>";
}
?>