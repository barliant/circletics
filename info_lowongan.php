<?php 
session_start();	
include_once('config.php');

  function getNamex($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
} 

function getFotox($id){
	$f= mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id'"));
	return $f['foto'];
}

	$id_lowongan = strip_tags(base64_decode($_GET["id_lowongan"]));
	$sql = "SELECT * FROM lowongan_kerja where id_lowongan= '".$id_lowongan."'";
$query = mysql_query($sql);
$data = mysql_fetch_array($query);

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
<link href="css/css-lowongan.css" rel="stylesheet">

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
                        <a href="about.php">About</a>
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
            <p><!-- Codrops top bar -->
            </p>
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
<div class="container">
	<div class="row">
		<h2>Job Vacancy Details</h2>
	</div>
</div>
<div class="carousel-reviews broun-block">
    <div class="container">
        <div class="row">
            <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
            
                <div class="carousel-inner" style="padding-left:400px;">
                    <div class="item active">
                	    <div class="col-md-6 col-sm-6">
        				    <div class="block-text rel zmin">
						        <a><?php echo $data['judul']; ?></a>
							    <div class="mark">Tags: <a><?php echo $data['tags']?></a></div>
						        <p><?php echo $data['info']; ?></p>
							    <ins class="ab zmin sprite sprite-i-triangle block"></ins>
					        </div>
							<div class="person-text rel">
                            
                            <br><br>
                            <img src="upload/avatar/<?php echo getFotox($data['ID_User'])?>" width="30" height="30">
                            	<a><?php echo getNamex($data['ID_User'])?></a>
								<i>....</i>
							</div>
						</div>
</body>
</html>