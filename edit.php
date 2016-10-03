<?php 
session_start();
include_once('config.php');


//narik data dari edit_form.php
$ID_User	= $_SESSION['iduser'];
$username 	= $_POST['username'];
$password 	= $_POST['password'];
$encrypt	= md5($password);
$fullname	= $_POST['fullname'];
$thn		= $_POST['thn'];
$bln		= $_POST['bln'];
$tgl		= $_POST['tgl'];
$TTL		= $thn."-".$bln."-".$tgl;
$sex		= $_POST['sex'];
$alamat		= $_POST['alamat'];
$telepon	= $_POST['telepon'];
$email		= $_POST['email'];
$jurusan	= $_POST['jurusan'];
$tahun_angkatan	= $_POST['tahun_angkatan'];
$status 	= $_POST['status'];
$tempat_bekerja	= $_POST['tempat_bekerja'];
$confirm_pass	= $_POST['confirm_password'];


//ukuran file maksimal buat diupload
$max="3000"; 
$size=$_FILES['uploaded']['size'];
$size=$size/1024;

//dijadiin ke satuan MB pake fungsi sama dapetin ekstensinya
 function get_ext($key) { 
	$key=strtolower(substr(strrchr($key, "."), 1));
	$key=str_replace("jpeg","jpg",$key);
	return $key;
	}
//dapetin ekstensi file-nye
$file_ext=get_ext($_FILES['uploaded']['name']);
//ekstensi yg boleh doang
$allow_types=array("jpg","gif","png","bmp","jpeg");


//dapetin nama file yg lama
$mypath="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); //dapetin path-nya
$folder = "upload/avatar/"; //folder buat simpen foto
$namafilenya = basename($_FILES['uploaded']['name']);
if($namafilenya==""){$namafilenya=$_POST["fotolama"];}else{$namafilenya=$namafilenya;} //dapetin nama filenya
$target = $folder.$namafilenya;
move_uploaded_file($_FILES['uploaded']['tmp_name'], $target);

if ($confirm_pass != $password) {
	echo" <script language='JavaScript'> alert ('Password anda tidak sama, coba ulangi lagi!');</script>";
	echo '<script language="JavaScript"> window.location.href ="edit_form.php" </script>';
} else {
	echo "SELECT username FROM userlogin WHERE username='".$_POST['username']."'";
	if($_POST['username'] != $_POST['username2']){
		
	$dup = mysql_query("SELECT username FROM userlogin WHERE username='".$_POST['username']."'");
        if(mysql_num_rows($dup) >0){
            echo"<script language='JavaScript'> alert ('Username sudah dipakai!');</script>";
		echo '<script language="JavaScript"> window.location.href ="edit_form.php" </script>';
		}
        } else {
	//nyimpen ke database
	$query1=@mysql_query("update infouser set fullname='$fullname',TTL='$TTL',sex='$sex',alamat='$alamat',telepon='$telepon',email='$email',jurusan= '$jurusan', tahun_angkatan='$tahun_angkatan', status='$status', tempat_bekerja='$tempat_bekerja',foto='$namafilenya' where ID_User='".$_SESSION["iduser"]."'");
	$query2=@mysql_query("update userlogin(ID_User,username, password) 
								values('$d[ID_User]','$username','$encrypt')");


							print '<script type="text/javascript">';
							print 'alert("Profil anda sudah dirubah")';
							print '</script>';
							
							print '<script type="text/javascript">';
							print "window.location.href='profile_page.php?page_owner=". base64_encode(strip_tags($ID_User))."';";
							print '</script>';}
}
?>