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
                 <a class="navbar-brand" href="profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($_SESSION['iduser']));?>">My Profile</a>
                 <a class="navbar-brand" href="graph.php">Grafik</a>
                 <a class="navbar-brand" href="about.html">About</a>
                  <a class="navbar-brand" href="survey.php">Survey</a>
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
<div class="container">
	<div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <div id="imaginary_container"> 
                <div class="input-group stylish-input-group">
                
                    <form name='search' action='search.php'><input type="text" name="query" class="form-control"  placeholder="Search Your Friends by Name" >
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

<div class="container">
	<div class="row">
		<h2>Time Line</h2>
	</div>
    
  <p>Share your info here!</p>
  <left><p class="submit button"> 
    <form name='forminfo' action='insert_info.php'>
      <textarea name="info" cols="75" rows="4" placeholder="Share your ideas and info with us..."></textarea>
      <input type="submit" value="Share" /></form>
  </p>
  </left>
    <p>&nbsp;</p>
<div class="qa-message-list" id="wallmessages"><span class="asker-meta"><span class="qa-message-who"><span class="qa-message-who-data"><a href= "profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($data['ID_User']));?>" ><?php echo $data['fullname'];?></a></span></span></span>	
<table width="100%"><tr><td width="60%">
<div class="row">


    				<div class="col-md-7">
                    <div class="message-item" id="m16">
                    <?php
					
					function cekteman(){
					$cekteman = mysql_query("SELECT * FROM friends");	
					}
					
					$sqlCount = "select count(id_share) from shareinfo";  
$rsCount = mysql_fetch_array(mysql_query($sqlCount));  
$banyakData = $rsCount[0];  
$pages = isset($_GET['pages']) ? $_GET['pages'] : 1;  
$limit = 5;  
$mulai_dari = $limit * ($pages - 1);
					
					   $raw_results = mysql_query("SELECT shareinfo.ID_User,fullname,tanggal,info,id_share, foto FROM infouser, shareinfo WHERE infouser.ID_User = shareinfo.ID_User ORDER BY id_share DESC limit $mulai_dari, $limit");
             
while($data=mysql_fetch_array($raw_results)){
	$cekteman = mysql_query("SELECT friend FROM friends where ID_User='".$_SESSION["iduser"]."')");	
	//?>
                    
						<div class="message-inner">
							<div class="message-head clearfix">
								<div class="avatar pull-left"><?php echo "<img src='upload/avatar/$data[foto]' height='80' weight='80' />";?></div>
								<div class="user-detail">
									<h5 class="handle"><a href="profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($data['ID_User']));?>"><?php echo $data['fullname'];?></a></h5>
									<div class="post-meta">
										<div class="asker-meta">
											<span class="qa-message-what"></span>
											<span class="qa-message-when">
												<span class="qa-message-when-data"><?php echo $data['tanggal'];?></span>
											</span>
											<span class="qa-message-who">
											<span class="qa-message-who-pad">by </span></span>
										</div>
									</div>
								</div>
							</div>
							<div class="qa-message-content">
								<?php echo $data['info'];?>
                                <?php if ($_SESSION['iduser'] == $data['ID_User'] ) {
					?>
						<div class="row-actions">
						<a href="delete_info.php?id=<?php echo $data['id_share'];?> "onClick="return confirm('Hapus comment ini?')" class="delete">Delete</a>
						
						

					</div><?php } ?>
							</div>
					</div>
                    
                    <?php }?>
                    
                  <?php
$banyakHalaman = ceil($banyakData / $limit);  
echo 'Halaman: ';  
for($i = 1; $i <= $banyakHalaman; $i++){  
 if($page != $i){  
 echo '[<a href="home.php?pages='.$i.'">'.$i.'</a>] ';  
 }else{  
 echo "[$i] ";  
 }  
}  
?>    </div></td><td width="40%" valign="top">
                    
            
			<?php
           include_once('lowongan.php')
            ?>
</td></tr>
					</div></table>
					
</div>
</body>