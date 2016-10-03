<?php 
include('config.php');
$uid = $_GET['id'];

$query = mysql_query("delete from shareinfo where id_share='$uid'") or die(mysql_error());

if ($query) {
	echo" <script language='JavaScript'> alert ('Info berhasil di hapus!');</script>";
		echo '<script language="JavaScript"> window.location.href ="home.php";</script>';
} else {
	//kalo gagal nyimpen
	 echo" <script language= 'JavaScript'> alert ('Comment gagal di hapus!'); </script>";
}
?>