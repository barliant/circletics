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
       <meta name="viewport" content="width=device-width, initial-scale=1">
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
<form  action="register.php" autocomplete="on" method="post" enctype="multipart/form-data"> 
                                <h1>Create New Account</h1>         
                                             
            <p>
			  <label for="fullname">Fullname : </label> <input id="fullname" name="fullname" class="wide" type="text" required="required" placeholder="Your fullname"/>
			</p>
			 <p>
			  <label for="username">Username : </label><input id="username" name="username" class="wide" type="text" required="required" placeholder="Your username"/>
			</p>
  
    <p>Birthday :</p> 
      <select name="tgl">
<option selected="selected">Day</option>
<?php
for($a=1; $a<=31; $a+=1){
echo"<option value=$a> $a </option>";
}
?>
</select>
-
<select name="bln">
<option selected="selected">Month</option>
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
<option selected="selected">Year</option>
<?php
for($i=2011; $i>=1905; $i-=1){
echo"<option value=$i> $i </option>";
}
?>
</select>

           <p>
           <p>Sex :</p> <select name="sex">
<option selected="selected">-Please Choose-</option>
<option value="male">Male</option>
<option value="female">Female</option></select>
</p>
            <p>
			  <label for="alamat">Address</label> 
			  : 
			  <input id="alamat" name="alamat" class="wide" type="text" required="required" placeholder="Your address"/>
			</p>
            <p>
			  <label for="telepon">Phone : </label> <input id="telepon" name="telepon" class="wide" type="text" required="required" placeholder="Your phone number" />
			</p>
            <p>
				<label for="email">Email : </label><input id="email" name="email" class="wide" type="email"required="required" placeholder="Your email address"/>
			</p>
            <p>
			  <label for="tahun_angkatan">Angkatan : </label> <input id="tahun_angkatan" name="tahun_angkatan" class="wide" type="text" required="required" placeholder="Year when went to Trisakti" />
			</p>
            <p>
            <p>Status :</p>
            <select name="status">
<option selected="selected">-Please Choose-</option>
<option value="Dosen">Dosen</option>
<option value="Mahasiswa">Mahasiswa</option>
<option value="ALumni">Alumni</option></select></p>
            <p>
            <p>Jurusan :</p>
            <select name="jurusan">
<option selected="selected">-Please Choose-</option>
<option value="Teknik Informatika">Teknik Informatika</option>
<option value="Sistem Informasi">Sistem Informasi</option></select></p>
            <p>
			  <label for="tempat_bekerja">Work Place : </label> <input id="tempat_bekerja" name="tempat_bekerja" class="wide" type="text" required="required" placeholder="Your workplace now"/>
			</p>
            <p>Choose Your Avatar : 
            </p>
            <label for="foto"></label><input name="uploaded" type="file" required/>
	</br>
	<p>
			<p>
				<label for="password">Password :</label><input id="password" name="password" class="wide" type="password" required="required" placeholder="Your password" />
			</p>
			<p>
           			 <label for="confirm_password">Confirm Password : </label> <input id="confirm_password" name="confirm_password" class="wide" type="password" required="required" placeholder="Confirm your password" />
			</p>
           
<p>&nbsp;</p>

 <center><p class="signup button"> 
                                    <input type="submit" value="Sign Up" /> 
</p></center>
                        
  <p class="change_link">
									Already a member ? Please
								<a href="index.php" class="to_login">Log in</a>                            </p>
                        </form>
                      
</div>  
        </div>
</section>
</body>
</html>
