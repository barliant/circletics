<?php 
include('config.php');
$ID_User_teman=$_GET["ID_User_teman"];
$uid = $_GET['id'];

$query = mysql_query("delete from comment where ID_Comment='$uid'") or die(mysql_error());

if ($query) {
	echo" <script language='JavaScript'> alert ('Comment berhasil di hapus!');</script>";
		echo '<script language="JavaScript"> window.location.href ="profile_page.php?page_owner='.base64_encode($ID_User_teman).' ";</script>';
} else {
	 echo" <script language= 'JavaScript'> alert ('Comment gagal di hapus!'); </script>";
}
?>