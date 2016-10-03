<?php
include_once('../config.php');
session_start();
$query = mysql_query("select * from administrator");
$data = mysql_fetch_array($query);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/css-admin.css" rel="stylesheet">
<link href="../bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">
<link href="../bootstrap_profile/css/shop-item.css" rel="stylesheet">
<link href="../css/css-search.css" rel="stylesheet">
<title>Administrator - Circle-Tics - Keep The Circle Always Around You</title>
</head>

<body>
<div class="container" style="padding-left:380px">
  <div class="row">
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span class="glyphicon glyphicon-bookmark"></span>Administrator Page</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                          <a href="showUsers.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Users</a>
                          <a href="showLowongan.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Job Vacancy</a>
                         
                        </div>
                        <div class="col-xs-6 col-md-6">
                          <a href="../index.html" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Website</a>
                          <a href="logout.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Logout</a></div>
                         
                         <div class="col-xs-6 col-md-12">
                    <a href="change_password.php?id_admin=<?PHP echo($data['ID_Admin']);?>" class="btn btn-success btn-lg btn-block" role="button"><span class="glyphicon glyphicon-key"></span>Change Account Details</a>
                    
                   
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>