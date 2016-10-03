<?php 
session_start();	
include_once('config.php');
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
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style2.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
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
<form  action="edit.php" autocomplete="on" method="post" enctype="multipart/form-data"> 
                                <h1>Edit Your Profile Account</h1>         
  
  <?php 
			// terima id_user dari halaman users
			$ID_User = $_SESSION['iduser'];
			$ID_UserX = strip_tags(base64_decode($_GET["page_owner"]));
			
			$query = mysql_query("select * from infouser, userlogin where infouser.ID_User = userlogin.ID_User and  infouser.ID_User='$ID_User'");
			
			$data = mysql_fetch_array($query);
			$ttl=$data["TTL"];
			$arr=explode("-",$ttl);
			$tgl=$arr[0];
			$bln=$arr[1];
			$thn=$arr[2];
			?>
                                             
<p>
			  <label for="fullname">Fullname : </label> <input id="fullname" name="fullname" class="wide" type="text" required="required" value="<?php echo $data['fullname']; ?>"/>
			</p>
			 <p>
			  <label for="username">Username : </label>
			  <input id="username" name="username" class="wide" type="text" required="required" value="<?php echo $data['username']; ?>"/>
			  <input id="username2" name="username2" class="wide" type="hidden" required="required" value="<?php echo $data['username']; ?>"/>
			 </p>
  
    <p>Birthday :</p> 
      <select name="tgl">
<option selected="selected" value="<?php echo $tgl?>"><?php echo $tgl?></option>
<?php
for($a=1; $a<=31; $a+=1){
echo"<option value=$a> $a </option>";
}
?>
</select>
-
<select name="bln">
<option selected="selected"value="<?php echo $bln?>"><?php echo $bln?></option>
<?php
$bulan=array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$jlh_bln=count($bulan);
for($c=1; $c<$jlh_bln; $c+=1){
echo"<option value=$bulan[$c]> $bulan[$c] </option>";
}
?>
</select>
-
<select name="thn">
<option selected="selected"value="<?php echo $thn?>"><?php echo $thn?></option>
<?php
for($i=2011; $i>=1905; $i-=1){
echo"<option value=$i> $i </option>";
}
?>
</select>

           <p>
           <p>Sex :</p> <select name="sex">
<option selected="selected"value="<?php echo $data['sex']?>"><?php echo $data['sex']?></option>
<option value="male">Male</option>
<option value="female">Female</option></select>
</p>
            <p>
			  <label for="alamat">Address</label> 
			  : 
			  <input id="alamat" name="alamat" class="wide" type="text" required="required" value="<?php echo $data['alamat']; ?>"/>
			</p>
            <p>
			  <label for="telepon">Phone : </label> <input id="telepon" name="telepon" class="wide" type="text" required="required" value="<?php echo $data['telepon']; ?>"/>
			</p>
            <p>
				<label for="email">Email : </label><input id="email" name="email" class="wide" type="email"required="required" value="<?php echo $data['email']; ?>"/>
			</p>
            <p>
			  <label for="tahun_angkatan">Angkatan : </label> <input id="tahun_angkatan" name="tahun_angkatan" class="wide" type="text" required="required" value="<?php echo $data['tahun_angkatan']; ?>"/>
			</p>
            <p>
            <p>Status :</p>
            <select name="status">
<option selected="selected"value="<?php echo $data['status']?>"><?php echo $data['status']?></option>
<option value="Dosen">Dosen</option>
<option value="Mahasiswa">Mahasiswa</option>
<option value="ALumni">Alumni</option></select></p>
            <p>
            <p>Jurusan :</p>
            <select name="jurusan">
<option selected="selected"value="<?php echo $data['jurusan']?>"><?php echo $data['jurusan']?></option>
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Sistem Informasi">Sistem Informasi</option></select></p>
            <p>
			  <label for="tempat_bekerja">Work Place : </label> <input id="tempat_bekerja" name="tempat_bekerja" class="wide" type="text" required="required" value="<?php echo $data['tempat_bekerja']; ?>"/>
			</p>
            <p>Change Your Avatar : 
            </p>
            <label for="foto"></label><input name="uploaded" type="file" required/>
	</br>
	<p>
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
                        
  <p class="change_link">&nbsp;</p>
                        </form>
                      
</div>  
        </div>
</section>
</body>
</html>
