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
<form  action="submit_interest.php" autocomplete="on" method="post"> 
                          <h1>Interest of Progamming Languages</h1>         
                                             
            <p>&nbsp;</p>
<p>Your interest of Programming Languages :
  <i>( Scale 0 - 10, the lowest is 0 and the highest is 10 )</i></p>
<form>
<p><select name="c">
<option selected="selected">C</option>
<?php
for($j=0; $j<=10; $j++){
echo"<option value=$j> $j </option>";
}
?>
</select></p>
 <p><select name="java">
<option selected="selected">JAVA</option>
<?php
for($k=0; $k<=10; $k++){
echo"<option value=$k> $k </option>";
}
?>
</select></p>
<p><select name="PHP"><option selected="selected">PHP</option>
<?php
for($l=0; $l<=10; $l++){
echo"<option value=$l> $l </option>";
}
?>
</select></p>
<p><select name="python"><option selected="selected">PYTHON</option>
<?php
for($m=0; $m<=10; $m++){
echo"<option value=$m> $m </option>";
}
?>
</select></p>
<p><select name="ruby">
  <option selected="selected">RUBY</option>
<?php
for($n=0; $n<=10; $n++){
echo"<option value=$n> $n </option>";
}
?>
</select></p>
<p><select name="visual_basic"><option selected="selected">VISUAL BASIC</option>
<?php
for($p=0; $p<=10; $p++){
echo"<option value=$p> $p </option>";
}
?>
</select></p>
<p><select name="delphi"><option selected="selected">DELPHI</option>
<?php
for($q=0; $q<=10; $q++){
echo"<option value=$q> $q </option>";
}
?>
</select></p>
<p><select name="ASP"><option selected="selected">ASP</option>
<?php
for($r=0; $r<=10; $r++){
echo"<option value=$r> $r </option>";
}
?>
</select></p>
<p><select name="mobile_programming"><option selected="selected">Mobile Programming</option>
<?php
for($t=0; $t<=10; $t++){
echo"<option value=$t> $t </option>";
}
?>
</select></p></div>
<p>&nbsp;</p>

 <center><p class="submit_interest button"> 
                                    <input type="submit" value="Submit" /> 
</p></center>
                        
                              
                        </form>
                      
</div>  
        </div>
</section>
</body>
</html>
