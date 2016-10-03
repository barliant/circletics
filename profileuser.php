<?php
if($_GET[page_owner]){
	$sql = "SELECT * FROM infouser where ID_User= '".$page_owner."'";

}else{
$sql = "SELECT * FROM infouser where ID_User= '".$_SESSION['iduser']."'";
}
$query = mysql_query($sql);
$data = mysql_fetch_array($query);
?>

<div class="container">
    <div class="row">
        <div class="col-sm-2 col-md-2">
            <img src="upload/avatar/<?php echo $data['foto'];?>"
            alt="" class="img-rounded img-responsive" /><br />

<a href="index.php?page_owner=<?php echo strip_tags($data["ID_User"]); ?>">
</a>        </div>
        <div class="col-sm-4 col-md-4">
            <blockquote>
                <p> <?php echo $data['fullname']; ?></p> <small><cite title="Source Title"><?php echo $data['alamat']; ?><i class="glyphicon glyphicon-map-marker"></i></cite></small>
            </blockquote>
            <p> <i class="glyphicon glyphicon-envelope"></i> <?php echo $data['email']; ?>
                <br
                /> <i class="glyphicon glyphicon-user"></i> <?php echo $data['sex']; ?>
                <br /> <i class="glyphicon glyphicon-gift"></i> <?php echo $data['TTL']; ?><br
                /> 
                <i class="glyphicon glyphicon-earphone"></i> <?php echo $data['telepon']; ?>
                <br
                /> 
              <i class="glyphicon glyphicon-road"></i> <?php echo $data['jurusan']; ?>
                <br
                /> 
              <i class="glyphicon glyphicon-calendar"></i> <?php echo $data['tahun_angkatan']; ?>
               <br
                /> 
              <i class="glyphicon glyphicon-bullhorn"></i> <?php echo $data['status']; ?>
                <br
                /> 
              <i class="glyphicon glyphicon-briefcase"></i> <?php echo $data['tempat_bekerja']; ?>
                <br />
        </p>
        </div>
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-sm-2 col-md-4"> </div>
    </div>
    <p>&nbsp;</p>
    <?php
	$cekteman = mysql_query("SELECT * FROM friends where (friend='$data[ID_User]' AND ID_User='".$_SESSION["iduser"]."')");	
	$ada=mysql_num_rows($cekteman);
	if($ada==0){}else{
		?>
    <p>Leave your comment for your friend!</p>
  <form name='fcomment' action='insert_comment.php' method="post"><textarea rows="4" cols="75" name='comment' placeholder="Post your comment here..."></textarea>
<input type="hidden" value="<?php echo $data['ID_User'];?>" name="ID_User_teman" />
<left><p class="submit button"> 
                                    <input type="submit" value="Post" /></form>
</p></left>

    <?php }?>
</div>