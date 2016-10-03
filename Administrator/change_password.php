<?php 
session_start();	
include_once('../config.php');
?>


<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Circle-Tics : Keep The Circle Always Around You</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
 <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="../css/demo.css" />
        <link rel="stylesheet" type="text/css" href="../css/style2.css" />
		<link rel="stylesheet" type="text/css" href="../css/animate-custom.css" />
</head>

<body>

<div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
              <div class="clr"></div>
            </div><!--/ Codrops top bar -->
 <header>
                <h1>CIRCLE-TICS</h1>
                <p>( Keep The Circle Always Around You )</p>
                <p>TIF &amp; SI USAKTI</p>
         <p>&nbsp;</p>

          </header>

<section>

 <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="signup" class="animate form">
<form  action="change.php" autocomplete="on" method="post" enctype="multipart/form-data"> 
                                <h1>Admin's Profile Account</h1>         
  
  <?php 
			// terima id_admin dari halaman admin
			$admin_id = $_GET['id_admin'];
			
			$query = mysql_query("select * from administrator where ID_Admin='$admin_id'");
			
			$data = mysql_fetch_array($query);?>
                                             
			 <p>
			  <label for="username">Username : </label>
			  <input id="username" name="username" class="wide" type="text" required="required" value="<?php echo $data['username']; ?>"/>
			  <input id="username2" name="username2" class="wide" type="hidden" required="required" value="<?php echo $data['username']; ?>"/>
			 </p>
			<p>
				<label for="password">New Password :</label><input id="password" name="password" class="wide" type="password" required="required" placeholder="Your password" />
			</p>
			<p>
           			 <label for="confirm_password">Confirm Password : </label> <input id="confirm_password" name="confirm_password" class="wide" type="password" required="required" placeholder="Confirm your password" />
			</p>
           
<p>&nbsp;</p>

 <center><p class="signup button"> 
                                    <input type="submit" value="Submit" /> 
</p></center>
</form>
 <center><a href="panelAdmin.php">Panel Administrator</a></center>                     
</div>  
        </div>
</section>
</body>
</html>
