<?php 
include_once('config.php');


//narik data dari halaman interestform.php
$bahasa_c= mysql_real_escape_string($_POST['c']);
$java 	= mysql_real_escape_string($_POST['java']);
$PHP	= mysql_real_escape_string($_POST['PHP']);
$python	= mysql_real_escape_string($_POST['python']);
$ruby	= mysql_real_escape_string($_POST['ruby']);
$visual_basic		= mysql_real_escape_string($_POST['visual_basic']);
$delphi		= mysql_real_escape_string($_POST['delphi']);
$ASP	= mysql_real_escape_string($_POST['ASP']);
$mobile_programming		= mysql_real_escape_string($_POST['mobile_programming']);


	$d=mysql_fetch_array(mysql_query("SELECT ID_User FROM infouser ORDER BY ID_User DESC"));

	//nyimpen ke database
$query1=@mysql_query("insert into interest_pemrograman(bahasa_c, java, PHP, python, ruby, visual_basic, delphi, ASP, mobile_programming) 
								values('$bahasa_c','$java','$PHP','$python','$ruby','$visual_basic','$delphi', '$ASP', '$mobile_programming')");


							print '<script type="text/javascript">';
							print 'alert("Data Berhasil Ditambah, Silahkan Login!")';
							print '</script>';
							
							print '<script type="text/javascript">';
							print "window.location.href='login.php';";
							print '</script>';

?>