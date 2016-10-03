<?php
session_start();
include_once('config.php');

$query = mysql_query("delete FROM hasilhitung WHERE ID_User = '".$_SESSION['iduser']."'") or die(mysql_error());
$query2 = mysql_query("delete FROM hasilhitung_cos WHERE ID_User = '".$_SESSION['iduser']."'") or die(mysql_error());

session_destroy();

header('location:index.html');
?>