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
                 <a class="navbar-brand" href="profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($_SESSION['iduser']));?>">My Profile</a>
                 <a class="navbar-brand" href="search.php">Search</a>
                 <a class="navbar-brand" href="about.html">About</a>
                 <a class="navbar-brand" href="logout.php">Logout</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
     <form name='search' method="get" action='search.php'><br><br>
                    <span class="input-group-addon">
                      
                        </button>
<div class="container">
	<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                    <input type="text" name="query" class="form-control"  placeholder="Search Your Friends by Name" >
                    <span class="input-group-addon">
                        <button type="submit">
                            <span class="glyphicon glyphicon-search"></span>
                        </button></form>  
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>
<p>&nbsp;</p>
<div class="container">
    <div class="pricing-table pricing-three-column row">
    <?php
    $query = $_GET['query'];
    //dapetin value
     
    $min_length = 1;
    //minimal query
     
    if(strlen($query) >= $min_length){ // kalo query lebih besar dari minimum, maka          
        $query = htmlspecialchars($query);
        //menyamakan karakter di html
        $query = mysql_real_escape_string($query);       
        $raw_results = mysql_query("SELECT * FROM infouser WHERE (`fullname` LIKE '%".$query."%')") or die(mysql_error());
             
      
        //'%$query%' untuk nyari apa yg dicari di kolom
         	
		 
        if(mysql_num_rows($raw_results) > 0){ //looping kalo hasil lebih dari 1
		
while($data=mysql_fetch_array($raw_results)){
    
	         ?>
     
	
        <div class="plan col-sm-4 col-lg-4">
          <div class="plan-name-bronze">
            <?php echo "<img src='upload/avatar/$data[foto]' height='80' weight='80' />";?>
          </div>
          <ul>
            <li class="plan-feature"><?php echo $data['fullname'];?></li>
          
            <li class="plan-feature"><a href="profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($data['ID_User']));?>" class="btn btn-primary btn-plan-select"><i class="icon-white icon-ok"></i>View Profile</a></li>
          </ul>
        </div>
  <?php } }
  
	}
	?>
  <div class="col-md-12" style="padding-top:80px">
            <?php
           include_once('rekomendasi.php')
            ?>
       
</div></body></html>

</body>
</html>