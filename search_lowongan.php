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

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>No.</th>
      <th>Perusahaan</th>
      <th>Info</th>
      <th>Author</th>
      <th>Tags</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  
    function getName($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
} 
  
$sql_coba = mysql_query("SELECT * FROM lowongan_kerja where tags = '$_GET[tags]'");
$i=0;
while(
	$datax=mysql_fetch_array($sql_coba))
	{		
	$cekteman = mysql_query("SELECT * FROM friends where friend='$data[ID_User]' OR ID_User='".$_SESSION["iduser"]."'");	
	$ada=mysql_num_rows($cekteman);
	if($ada==0){echo "<tr><td>Maaf lowongan pekerjaan belum tersedia";}else{
	$i++;
$ID_User=$data['ID_User'];
$u[$i]=$ID_User;
$potong=substr($datax["info"], 0, 25);
$jmlkarakter=strlen($datax["info"]);
if($jmlkarakter>25){
	$info=$potong."...";
}else{
		$info=$datax["info"];

}
?>


    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $datax['judul']?>
	  <td><?php echo $info?></td>
      <td><?php echo getName($datax['ID_User'])?></td>
      <td><a href="search.php?tags=<?php echo $datax['tags']?>"><?php echo $datax['tags']?></a></td>
      <td><a href= "info_lowongan.php?id_lowongan=<?PHP echo base64_encode(strip_tags($datax['id_lowongan']));?>" ><img src="images/button/button_details.png" height="20" width="100"></a></td>
    </tr>
<?php    }}
?>
  </tbody>
</table> 