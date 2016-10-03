<?php 
session_start();
include_once('config.php');

$username		= $_SESSION['username'];
$ask1			= $_POST['ask1'];
$ask2			= $_POST['ask2'];
$ask3			= $_POST['ask3'];
$ask4			= $_POST['ask4'];

$query = mysql_query("insert into survey values('', '$username', '$ask1', '$ask2', '$ask3', '$ask4')"); 


if ($query) {
		//kalo berhasil nyimpen
		echo" <script language='JavaScript'> alert ('Terimakasih telah mengisi survey ;)');</script>";
		echo '<script language="JavaScript"> window.location.href ="home.php";</script>';
} else {
	echo "SELECT username FROM survey WHERE username='".$_SESSION['username']."'";
	$dup = mysql_query("SELECT username FROM survey WHERE username='".$_SESSION['username']."'");
        if(mysql_num_rows($dup) >0){
            echo"<script language='JavaScript'> alert ('Anda sudah mengisi survey!');</script>";
		echo '<script language="JavaScript"> window.location.href ="home.php" </script>';
        } else {
	//kalo gagal nyimpen
	 echo" <script language= 'JavaScript'> alert ('Gagal mengisi survey, coba lagi!'); </script>";
	 echo '<script language="JavaScript"> window.location.href ="survey.php";</script>';
}}
?>
