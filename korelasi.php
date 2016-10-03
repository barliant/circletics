<?php 
session_start();
include_once('config.php');
include_once('korelasi_cos.php');

function similarity($user1, $user2){

$sum1 = 0;$sum2 = 0;$sumSq1 = 0;$sumSq2 = 0;$pSum = 0;

$c		= getNilai($user1, "bahasa_c");
$c_pow=pow($c,2);
$java	= getNilai($user1, "java");
$java_pow=pow($java,2);
$PHP	= getNilai($user1, "PHP");
$PHP_pow=pow($PHP,2);
$python	= getNilai($user1, "python");
$python_pow=pow($python,2);
$ruby	= getNilai($user1, "ruby");
$ruby_pow=pow($ruby,2);
$visual_basic = getNilai($user1, "visual_basic");
$visual_basic_pow=pow($visual_basic,2);
$delphi	= getNilai($user1, "delphi");
$delphi_pow=pow($delphi,2);
$ASP	= getNilai($user1, "ASP");
$ASP_pow=pow($ASP,2);
$mobile_programming = getNilai($user1, "mobile_programming");
$mobile_programming_pow=pow($mobile_programming,2);
$sum1=$c+$java+$PHP+$python+$ruby+$visual_basic+$delphi+$ASP+$mobile_programming;
$sumSq1=$c_pow+$java_pow+$PHP_pow+$python_pow+$ruby_pow+$visual_basic_pow+$delphi_pow+$ASP_pow+$mobile_programming_pow;

$c2		= getNilai($user2, "bahasa_c");
$c2_pow=pow($c2,2);
$java2	= getNilai($user2, "java");
$java2_pow=pow($java2,2);
$PHP2	= getNilai($user2, "PHP");
$PHP2_pow=pow($PHP2,2);
$python2	= getNilai($user2, "python");
$python2_pow=pow($python2,2);
$ruby2	= getNilai($user2, "ruby");
$ruby2_pow=pow($ruby2,2);
$visual_basic2 = getNilai($user2, "visual_basic");
$visual_basic2_pow=pow($visual_basic2,2);
$delphi2	= getNilai($user2, "delphi");
$delphi2_pow=pow($delphi2,2);
$ASP2	= getNilai($user2, "ASP");
$ASP2_pow=pow($ASP2,2);
$mobile_programming2 = getNilai($user2, "mobile_programming");
$mobile_programming2_pow=pow($mobile_programming2,2);
$sum2=$c2+$java2+$PHP2+$python2+$ruby2+$visual_basic2+$delphi2+$ASP2+$mobile_programming2;
$sumSq2=$c2_pow+$java2_pow+$PHP2_pow+$python2_pow+$ruby2_pow+$visual_basic2_pow+$delphi2_pow+$ASP2_pow+$mobile_programming2_pow;

$pSum = ($c*$c2)+($java*$java2)+($PHP*$PHP2)+($python*$python2)+($ruby*$ruby2)+($visual_basic*$visual_basic2)+($delphi*$delphi2)+($ASP*$ASP2)+($mobile_programming*$mobile_programming2);

    $n = 9;
    if ($n == 0) return 0;

    $num = $pSum - (($sum1 * $sum2) / $n);
    $den = sqrt(($sumSq1 - pow($sum1,2)/$n) * ($sumSq2 - pow($sum2,2)/$n));
    if ($den == 0) return 0;
    return $num/$den;

}


function getNilai($id,$prm){
	$d=mysql_fetch_array(mysql_query("SELECT $prm FROM interest_pemrograman WHERE ID_User='$id' "));	
	return $d[$prm];
}function getName($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
}
$u1=$_SESSION['iduser'];


 
$sql= mysql_query("SELECT ID_User , fullname FROM infouser WHERE ID_User != '".$_SESSION['iduser']."'");
$i=0;
while(
	$data=mysql_fetch_array($sql))
	{		
	$i++;
$ID_User=$data['ID_User'];
 $u[$i]=$ID_User;
 $sim=similarity($u1,$ID_User);
mysql_query("INSERT INTO hasilhitung(ID_User, ID_User_Rekomendasi, korelasi) values  ($u1, '$ID_User', '$sim')");

}
				header('location:home.php');
?>
  </body>
</html>