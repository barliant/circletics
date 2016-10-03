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
                <a class="navbar-brand" href="home.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                <a href="profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($_SESSION['iduser']));?>">My Profile</a>
                </li>
                    <li>
                        <a href="graph.php">Grafik</a>
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

<div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
              <div class="clr"></div>
            </div><!--/ Codrops top bar -->

<section>

 <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="signup" class="animate form">

</head>

<body>
<form name='forminfolowongan' method="post" action='insert_lowongan.php'>
<textarea name="judul" cols="40" rows="1" placeholder="Put the title here"></textarea>
<p>&nbsp;</p>
<p>
  <textarea name="info" cols="75" rows="4" placeholder="Share your info about the job vacancy here..."></textarea>
</p>

 <p>Specification tags for the job :</p>
            <select name="tags">
<option selected="selected">-Please Choose-</option>
<option value="mobile programming">Mobile Programming</option>
<option value="desktop programming">Desktop Programming</option>
<option value="system analyst">System Analyst</option>
<option value="computer network">Computer Network</option>
<option value="web programming">Web Programming</option>
<option value="flash programming">Flash Programming</option>
<option value="web designer">Web Designer</option>
<option value="computer graphics">Computer Graphics</option>
<option value="information security">Information Security</option>
</select></p>
<p>&nbsp;</p>
<input type="submit" name="bebas" value="Submit" />
</form>
</body>
</html>