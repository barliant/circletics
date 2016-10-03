<?php
session_start();
?>

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>No.</th>
      <th>Perusahaan</th>
      <th>Info</th>
      <th>Author</th>
      <th>Tags</th>
    </tr>
  </thead>
  <tbody>
  
  <?php
  
 
    function getName($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
} 
 
			$sqlCount = "select count(id_lowongan) from lowongan_kerja";  
$rsCount = mysql_fetch_array(mysql_query($sqlCount));  
$banyakData = $rsCount[0];  
$page = isset($_GET['page']) ? $_GET['page'] : 1;  
$limit = 5;  
$mulai_dari = $limit * ($page - 1);  
  
$sql_coba = mysql_query("SELECT * FROM lowongan_kerja limit $mulai_dari, $limit");
$i=0;
while(
	$datax=mysql_fetch_array($sql_coba))
	{		
	$cekteman = mysql_query("SELECT friend FROM friends where ID_User='".$_SESSION["iduser"]."'");	
	$i++;
$ID_User=$data['ID_User'];
$u[$i]=$ID_User;
$potong=substr($datax["info"], 0, 25);
$jmlkarakter=strlen($datax["info"]);
if($jmlkarakter>25){
	$info=$potong."...";
}else{
		$info=$datax["info"];

}
?>


    <tr>
      <td><?php echo $i?></td>
      <td><?php echo $datax['judul']?><br><?php if ($_SESSION['iduser'] == $datax['ID_User'] ) {
					?><a href= "delete_lowongan.php?id_lowongan=<?PHP echo $datax['id_lowongan'];?>">Delete</a><?php } ?></td>
	  <td><?php echo $info?></td>
      <td><?php echo getName($datax['ID_User'])?></td>
      <td><a href="search_lowongan.php?tags=<?php echo $datax['tags']?>"><?php echo $datax['tags']?></a></td>
      <td><a href= "info_lowongan.php?id_lowongan=<?PHP echo base64_encode(strip_tags($datax['id_lowongan']));?>" ><img src="images/button/button_details.png"></a></td>
    </tr>
<?php    }?>
  </tbody>
</table> 
<a href="form_lowongan.php">Tambah Lowongan</a>
<br><br>
<?php
$banyakHalaman = ceil($banyakData / $limit);  
echo 'Halaman: ';  
for($i = 1; $i <= $banyakHalaman; $i++){  
 if($page != $i){  
 echo '[<a href="home.php?page='.$i.'">'.$i.'</a>] ';  
 }else{  
 echo "[$i] ";  
 }  
}  
?>  