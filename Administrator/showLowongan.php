<?php
//session_start();
include_once('../config.php');
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
<link href="../bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap_profile/css/shop-item.css" rel="stylesheet">
<link href="../css/css-search.css" rel="stylesheet">
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
                <a href="panelAdmin.php">Panel Administrator</a>
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
<br><br />
<table class="table table-striped table-hover ">
<tr>
      <th>No.</th>
      <th>Author</th>
      <th>Tanggal</th>
      <th>Judul</th>
      <th>Info</th>
      <th>Tags</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  function getNames($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
  }
  
  $tampil = mysql_query("SELECT * from lowongan_kerja");
  while ($data = mysql_fetch_array($tampil)) {
	  ?>
  
    <tr>
      <td><?php echo $data['id_lowongan']; ?></td>
      <td><?php echo getNames($data['ID_User'])?></td>
      <td><?php echo $data['tanggal']; ?></td>
      <td><?php echo $data['judul']; ?></td>
      <td><?php echo $data['info']; ?></td>
      <td><?php echo $data['tags']; ?></td>
      <td><a href= "../info_lowongan.php?id_lowongan=<?PHP echo base64_encode(strip_tags($data['id_lowongan']));?>" ><img src="../images/button/button_details.png" width="50" height="30"></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table> 