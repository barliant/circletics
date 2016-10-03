<?php 
session_start();	
include_once('config.php');
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap_profile/css/shop-item.css" rel="stylesheet">
<link href="css/css-timeline.css" rel="stylesheet">
<title>Circle-Tics - Keep The Circle Always Around You</title>
</head>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
         <li>
                        <a href="panelAdmin.php">Panel Admin</a>
                  </li>
            
              <li>
                        <a href="about.html">About</a>
                  </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<table class="table table-striped table-hover ">
<tr>
      <th>Pertanyaan</th>
      <th>Ya</th>
      <th>Tidak</th>
    </tr>
  </thead>
  <tbody>
  
 <td>1. Apakah penggunaan aplikasi ini tergolong mudah?
 
<?php
$result = mysql_query("SELECT ask1, COUNT(*) as ya FROM survey WHERE ask1 = 'ya'") or die(mysql_error());
$data=mysql_fetch_assoc($result);
?><td><?php echo $data['ya'];?>

<?php
$result2 = mysql_query("SELECT ask1, COUNT(*) as tidak FROM survey WHERE ask1 = 'tidak'") or die(mysql_error());
$data=mysql_fetch_assoc($result2);
?> <td><?php echo $data['tidak'];?>

<tr>
      <th></th>
      <th>Cepat</th>
      <th>Agak Lambat</th>
      <th>Lambat</th>
    </tr>
  </thead>
  <tbody>

 <td>2. Ketika melakukan login, bagaimanakah respon dari sistem?
 
<?php
$result3 = mysql_query("SELECT ask2, COUNT(*) as cepat FROM survey WHERE ask2 = 'cepat'") or die(mysql_error());
$data=mysql_fetch_assoc($result3);
?><td><?php echo $data['cepat'];?>

<?php
$result4 = mysql_query("SELECT ask2, COUNT(*) as agak FROM survey WHERE ask2 = 'agak lambat'") or die(mysql_error());
$data=mysql_fetch_assoc($result4);
?> <td><?php echo $data['agak'];?>

<?php
$result5 = mysql_query("SELECT ask2, COUNT(*) as lambat FROM survey WHERE ask2 = 'lambat'") or die(mysql_error());
$data=mysql_fetch_assoc($result5);
?> <td><?php echo $data['lambat'];?>

<tr>
      <th></th>
      <th>Ya</th>
      <th>Tidak</th>
    </tr>
  </thead>
  <tbody>
  
 <td>3. Apakah rekomendasi user yang diberikan sistem menurut anda telah sesuai?
 
<?php
$result6 = mysql_query("SELECT ask3, COUNT(*) as ya FROM survey WHERE ask3 = 'ya'") or die(mysql_error());
$data=mysql_fetch_assoc($result6);
?><td><?php echo $data['ya'];?>

<?php
$result7 = mysql_query("SELECT ask3, COUNT(*) as tidak FROM survey WHERE ask3 = 'tidak'") or die(mysql_error());
$data=mysql_fetch_assoc($result7);
?> <td><?php echo $data['tidak'];?>

<tr>
      <th></th>
      <th>Ya</th>
      <th>Cukup</th>
      <th>Tidak</th>
    </tr>
  </thead>
  <tbody>

 <td>4. Apakah aplikasi tampilan menarik?
 
<?php
$result8 = mysql_query("SELECT ask4, COUNT(*) as ya FROM survey WHERE ask4 = 'ya'") or die(mysql_error());
$data=mysql_fetch_assoc($result8);
?><td><?php echo $data['ya'];?>

<?php
$result9 = mysql_query("SELECT ask4, COUNT(*) as cukup FROM survey WHERE ask4 = 'cukup'") or die(mysql_error());
$data=mysql_fetch_assoc($result9);
?> <td><?php echo $data['cukup'];?>

<?php
$result10 = mysql_query("SELECT ask4, COUNT(*) as tidak FROM survey WHERE ask4 = 'tidak'") or die(mysql_error());
$data=mysql_fetch_assoc($result10);
?> <td><?php echo $data['tidak'];?>

      
    </tr>
  </tbody>
</table> 