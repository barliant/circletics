<?php
session_start();
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
                        <a href="../hasil_survey.php">Hasil Survey</a>
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
      <th>ID User</th>
      <th>Fullname</th>
      <th>Email</th>
      <th>Tahun Angkatan</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
 $tampil = mysql_query("SELECT * from infouser");
  while ($data = mysql_fetch_array($tampil)) {
	  ?>
  
    <tr>
      <td><?php echo $data['ID_User']; ?></td>
      <td><?php echo $data['fullname']; ?></td>
      <td><?php echo $data['email']; ?></td>
      <td><?php echo $data['tahun_angkatan']; ?></td>
      <td><?php echo $data['status']; ?></td>
      <td><a href= "../profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($data['ID_User']));?>" ><img src="../images/button/button_view.gif"></a></td>
      <td><a href= "delete.php?page_owner=<?PHP echo base64_encode(strip_tags($data['ID_User']));?>" ><img src="../images/button/button_delete.png" width="50" height="50"></a></td>
    </tr>
    <?php } ?>
  </tbody>
</table> 