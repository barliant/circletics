<?php 
session_start();
include_once('config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap_profile/css/shop-item.css" rel="stylesheet">
<link href="css/css-search.css" rel="stylesheet">
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
                        <a href="search.php">Search</a>
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
    
     <p>

<body>
<form name='survey' method="post" action='insert_survey.php'>
<br>
<br>
 <p>1. Apakah penggunaan aplikasi ini tergolong mudah?</p><input type="radio" name="ask1" value="ya">Ya
<br>
<input type="radio" name="ask1" value="tidak">Tidak
</p>
<p>&nbsp;</p>

     <p>2. Ketika melakukan login, bagaimanakah respon dari sistem?</p><input type="radio" name="ask2" value="cepat">Cepat
<br>
<input type="radio" name="ask2" value="agak lambat">Agak Lambat
<br>
<input type="radio" name="ask2" value="lambat">Lambat
</p>
<p>&nbsp;</p>

  <p>3. Apakah rekomendasi user yang diberikan sistem menurut anda telah sesuai?</p><input type="radio" name="ask3" value="ya">Ya
<br>
<input type="radio" name="ask3" value="tidak">Tidak
</p>
<p>&nbsp;</p>

  <p>4. Apakah tampilan aplikasi menarik?</p><input type="radio" name="ask4" value="ya">Ya
<br>
<input type="radio" name="ask4" value="cukup" >Cukup
<br>
<input type="radio" name="ask4" value="tidak">Tidak
</p>
<br>
<input type="submit" name="bebas" value="Submit" />
</form>
</body>
</html>