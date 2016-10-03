<?php 
include_once('config.php');


//nangkep data dari halaman register
echo "username".$username 	= $_POST['username'];
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


//file maksimal yang bisa di upload
$max="3000";
$size=$_FILES['uploaded']['size'];
$size=$size/1024;

//dijadiin ke satuan MB, dapetin ekstensi file
 function get_ext($key) {
	$key=strtolower(substr(strrchr($key, "."), 1));
	$key=str_replace("jpeg","jpg",$key);
	return $key;
	}
#dapetin ekstensi file
$file_ext=get_ext($_FILES['uploaded']['name']);
#ekstensi yg boleh
$allow_types=array("jpg","gif","png","bmp","jpeg");


//dapetin nama file
$mypath="http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);#dapetin path-nya
$folder = "upload/avatar/"; #folder buat nyimpen foto
$namafilenya = basename($_FILES['uploaded']['name']); #dapetin nama file
$target = $folder.$namafilenya;
move_uploaded_file($_FILES['uploaded']['tmp_name'], $target);

if ($confirm_pass != $password) {
	echo" <script language='JavaScript'> alert ('Password anda tidak sama, coba ulangi lagi!');</script>";
	echo '<script language="JavaScript"> window.location.href ="registerform.php" </script>';
} else {
	echo "SELECT username FROM userlogin WHERE username='".$_POST['username']."'";
	$dup = mysql_query("SELECT username FROM userlogin WHERE username='".$_POST['username']."'");
        if(mysql_num_rows($dup) >0){
            echo"<script language='JavaScript'> alert ('Username sudah dipakai!');</script>";
		echo '<script language="JavaScript"> window.location.href ="registerform.php" </script>';
        } else {
	//nyimpen ke database
	$query1=@mysql_query("insert into infouser(fullname, TTL, sex, alamat, telepon, email, jurusan, tahun_angkatan, status, tempat_bekerja, foto) 
								values('$fullname','$TTL','$sex','$alamat','$telepon','$email', '$jurusan', '$tahun_angkatan', '$status', '$tempat_bekerja','$namafilenya')");
	$d=mysql_fetch_array(mysql_query("SELECT ID_User FROM infouser ORDER BY ID_User DESC"));
	$query2=@mysql_query("insert into userlogin(ID_User,username, password) 
								values('$d[ID_User]','$username','$encrypt')");


							print '<script type="text/javascript">';
							print 'alert("Anda sudah terdaftar!")';
							print '</script>';
							
							print '<script type="text/javascript">';
							print "window.location.href='interestform.php';";
							print '</script>';}
}
?>