<?php
include_once('config.php');
session_start();
$id_user=$_SESSION['iduser'];
?>
<?php
session_start();
ob_start();
include "config.php"; 

//cek udah bikin session belom

	//identifikasi user
	if(isset($_GET["page_owner"]) && !empty($_GET["page_owner"]))
	{
		$page_owner = strip_tags(base64_decode($_GET["page_owner"]));
	}
	else
	{
		$page_owner = strip_tags($_SESSION["VALID_USER_ID"]);
	}
	
	//cek informasi user 
	$check_user_details = mysql_query("select * from `infouser` where `ID_User` = '".mysql_real_escape_string($page_owner)."'");
	
	//dapetin informasi user dari tabel database
	$get_user_details = mysql_fetch_array($check_user_details);
	
	$user_id = strip_tags($get_user_details['id']);
	$fullname = strip_tags($get_user_details['fullname']);
	$ID_User = strip_tags($get_user_details['ID_User']);
	$email = strip_tags($get_user_details['email']);
	echo '<input type="hidden" id="logged_in_username" value="'.strip_tags($_SESSION["VALID_USER_ID"]).'">';
	echo '<input type="hidden" id="page_owner" value="'.$page_owner.'">';	
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile User <?php echo $_SESSION['username'];?></title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bootstrap_profile/css/shop-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


<!-- Required header files -->
<script type="text/javascript" src="js/jquery_1.5.2.js"></script>
<script type="text/javascript" src="js/vpb_script.js"></script>
<link href="css/style_notif.css" rel="stylesheet" type="text/css">

</head>

<!-- Notification Displayer -->
<div id="vpb_notification_wrapper"></div>

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
                <a class="navbar-brand" href ="edit_form.php?page_owner=<?PHP echo base64_encode(strip_tags($_SESSION['iduser']));?>">Edit Profile</a>
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

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-6">
            <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">My Profile</h3>
  </div>
  <div class="panel-body">
     <?php
           include_once('profileuser.php')
            ?>
             <?php
           include_once('notif_friend.php')
            ?>
            <br><br><br><br><br>
            <?php
           include_once('list_comment.php')
            ?>
  </div>
</div>
</div>
           

               
                 <div class="col-md-5">
			<?php
           include_once('list_friend.php')
            ?>
            
            
               </div>
              </div> 
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Circle-Tics 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
