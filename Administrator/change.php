<?php 
session_start();
include_once('../config.php');

$ID_Admin	= $_POST['admin_id'];
$username 	= $_POST['username'];
$password 	= $_POST['password'];
$encrypt	= md5($password);
$confirm_pass	= $_POST['confirm_password'];

if ($confirm_pass != $password) {
	echo" <script language='JavaScript'> alert ('Password anda tidak sama, coba ulangi lagi!');</script>";
	echo '<script language="JavaScript"> window.location.href ="change_password.php" </script>';
} else {
	echo "SELECT username FROM administrator WHERE username='".$_POST['username']."'";
	if($_POST['username'] != $_POST['username2']){
		
	$dup = mysql_query("SELECT username FROM administrator WHERE username='".$_POST['username']."'");
        if(mysql_num_rows($dup) >0){
            echo"<script language='JavaScript'> alert ('Username sudah dipakai!');</script>";
		echo '<script language="JavaScript"> window.location.href ="change_password.php" </script>';
		}
        } else {
	// simpan data ke database
	$query = mysql_query("update administrator set username='$username', password='$ecnrypt' where ID_Admin='$ID_Admin'") or die(mysql_error());


							print '<script type="text/javascript">';
							print 'alert("Profil anda sudah dirubah")';
							print '</script>';
							
							print '<script type="text/javascript">';
							print "window.location.href='panelAdmin.php'";
							print '</script>';}
}
?>