<?php
//alamat host yg dipake
$host = 'sql307.byethost18.com'; 
 
//username dari hostingan
$user = 'b18_15691360'; 
 
//passwordnya
$pass = '19oktober';
 
//nama database-nya
$dbname = 'b18_15691360_circletics';
 
//buat connect ke host
$connect = mysql_connect($host, $user, $pass) or die(mysql_error());
 
//milih database yg dipake
$dbselect = mysql_select_db($dbname);
?>