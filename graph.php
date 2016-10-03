<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap_profile/css/shop-item.css" rel="stylesheet">
<link href="css/css-timeline.css" rel="stylesheet">
<title>Circle-Tics - Keep The Circle Always Around You</title>
</head>
<body>
 <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                <li>
                <a href="profile_page.php?page_owner=<?PHP echo base64_encode(strip_tags($_SESSION['iduser']));?>">My Profile</a>
                </li>
                    <li>
                        <a href="search.php">Search</a>
                    </li>
              <li>
                        <a href="about.html">About</a>
                  </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    </body>

<?php
session_start();
include_once('config.php');

function getName($id){
	$d=mysql_fetch_array(mysql_query("SELECT * FROM infouser WHERE ID_User='$id' "));	
	return $d['fullname'];
} 
			
			$json_korelasi = array();
$json_progress = array();
$query =mysql_query("SELECT hasilhitung.ID_User_Rekomendasi,hasilhitung.korelasi FROM hasilhitung where hasilhitung.ID_User='$_SESSION[iduser]' ORDER BY korelasi DESC");
$row = mysql_fetch_assoc($query);
//$user[] = $row['ID_User_Rekomendasi'];
$json_korelasi = array();
$json_progress = array();
do{
	$total=$row["korelasi"];
	$total_korelasi=$total;

$totalprogreskorelasi[] = $total_korelasi;
//array_push($json_totalrencana, $row["total_rencana"]);
array_push($json_progress, getName($row['ID_User_Rekomendasi']));
}
while($row = mysql_fetch_assoc($query));



			$json_korelasi1 = array();
$json_progress1 = array();
$query1 =mysql_query("SELECT hasilhitung_cos.ID_User_Rekomendasi,hasilhitung_cos.korelasi FROM hasilhitung_cos where hasilhitung_cos.ID_User='$_SESSION[iduser]'");
$row1 = mysql_fetch_assoc($query1);
$json_korelasi1 = array();
$json_progress1 = array();
do{
	$total1=$row1["korelasi"];
	$total_korelasi1=$total1;

$totalprogreskorelasi1[] = $total_korelasi1;
array_push($json_progress1, getName($row1['ID_User_Rekomendasi']));
}
while($row1 = mysql_fetch_assoc($query1));

?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="js/chart/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'User Similarity'
        },
        xAxis: {
            categories: <?php echo json_encode($json_progress);?>
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Korelasi'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
                 name: 'Pearson',
                  data: [<?php echo join($totalprogreskorelasi, ', ');?>]},
				  {
				   name: 'Cosine',
                  data: [<?php echo join($totalprogreskorelasi1, ', ');?>]

               }]
    });
});
		</script>
	</head>
	<body>
<script src="js/chart/highcharts.js"></script>
<script src="js/chart/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<br><br />
<table class="table table-striped table-hover ">
<tr>
      <th>No.</th>
      <th>User</th>
      <th>Pearson</th>
      <th>Cosine</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $tampil_cos = mysql_query("SELECT hasilhitung_cos.ID_User_Rekomendasi,hasilhitung_cos.korelasi as hasil_cos FROM hasilhitung_cos where hasilhitung_cos.ID_User='$_SESSION[iduser]' GROUP BY ID_User_Rekomendasi ORDER BY korelasi DESC");
  $i=0;
while(
	$data=mysql_fetch_array($tampil_cos))
	{		
	$tampil_prs = mysql_query("SELECT hasilhitung.ID_User_Rekomendasi,hasilhitung.korelasi as hasil_prs FROM hasilhitung where hasilhitung.ID_User='$_SESSION[iduser]' and ID_User_Rekomendasi='$data[ID_User_Rekomendasi]'");
	$data2=mysql_fetch_array($tampil_prs);
	$i++;
	  ?>
  
    <tr>
    <td><?php echo $i?></td>
      <td><?php echo getName($data['ID_User_Rekomendasi']); ?></td>
      <td><?php echo $data2['hasil_prs']; ?></td>
      <td><?php echo $data['hasil_cos']; ?></td>
    </tr>

<?php }?></tbody></table>
	</body>
</html>
