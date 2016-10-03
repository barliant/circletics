<table width="1067"><tr><td width="7"><td width="7"><td width="507">
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Recommendation User!</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  function getName($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
} 

function getFoto($id){
	$f=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id'"));
	return $f['foto'];
}

$sql_coba = mysql_query("SELECT (ID_User_Rekomendasi), COUNT(ID_User_Rekomendasi) FROM hasilhitung");
//echo $sql_coba;
$batas = 0.5*$sql_coba;
//echo $batas;
$batasx = round($batas,0,PHP_ROUND_HALF_EVEN);
//echo $batasx;

$sqlx= mysql_query("SELECT * FROM hasilhitung WHERE ID_User_Rekomendasi NOT IN (SELECT friend FROM friends WHERE ID_User = '".$_SESSION['iduser']."') AND ID_User = '".$_SESSION['iduser']."' ORDER BY korelasi DESC limit $batasx");
$i=0;
while(
	$datax=mysql_fetch_array($sqlx))
	{		
	$i++;
$ID_User=$data['ID_User'];
$u[$i]=$ID_User;
?>


    <tr>
      <td><?php echo $i?></td>
      <td><img src="upload/avatar/<?php echo getFoto($datax['ID_User_Rekomendasi'])?>" width="90" height="80" /></td>
      <td><?php echo getName($datax['ID_User_Rekomendasi'])?></td>
      <td><a href= "profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($datax['ID_User_Rekomendasi']));?>" ><img src="images/button/button_view.gif"></a></td>
    </tr>
<?php    }
?>
  </tbody>
</table> 
</td>

<!--  ---------------------------------------------------------------------------------------------  -->

<td width="10"><td width="9"><td width="508">
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Rank</th>
      <th>Recommendation User!!</th>
    </tr>
  </thead>
  <tbody>
  <?php
  
  function getNameCos($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
} 

function getFotoCos($id){
	$f=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id'"));
	return $f['foto'];
}

$sql_coba1 = mysql_query("SELECT (ID_User_Rekomendasi), COUNT(ID_User_Rekomendasi) FROM hasilhitung_cos");
//echo $sql_coba;
$batas1 = 0.5*$sql_coba;
//echo $batas;
$batasx1 = round($batas,0,PHP_ROUND_HALF_EVEN);
//echo $batasx;

$sqlx1= mysql_query("SELECT * FROM hasilhitung_cos WHERE ID_User_Rekomendasi NOT IN (SELECT friend FROM friends WHERE ID_User = '".$_SESSION['iduser']."') AND ID_User = '".$_SESSION['iduser']."' ORDER BY korelasi DESC limit $batasx1");
$i=0;
while(
	$datax1=mysql_fetch_array($sqlx1))
	{		
	$i++;
$ID_User=$data['ID_User'];
$u[$i]=$ID_User;
?>


    <tr>
      <td><?php echo $i?></td>
      <td><img src="upload/avatar/<?php echo getFotoCos($datax1['ID_User_Rekomendasi'])?>" width="90" height="80" /></td>
      <td><?php echo getNameCos($datax1['ID_User_Rekomendasi'])?></td>
      <td><a href= "profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($datax1['ID_User_Rekomendasi']));?>" ><img src="images/button/button_view.gif"></a></td>
    </tr>
<?php    }
?>
  </tbody>
</table> 
</td></tr></table>
