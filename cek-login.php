<?php 
session_start();

$logged_in = false;

//kalo user belum logout, lempar ke halaman home, kalo udah logout, lempar ke halaman login
if (!isset($_SESSION['iduser'])) {	
	echo '<script language="JavaScript"> window.location.href ="login.php" </script>';
} else {
	$logged_in = true;
	echo '<script language="JavaScript"> window.location.href ="home.php" </script>';
}
?>