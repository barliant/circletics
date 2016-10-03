<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap_profile/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap_profile/css/shop-item.css" rel="stylesheet">
<link href="css/css-timeline.css" rel="stylesheet">
<title>Untitled Document</title>
</head>

<body>
<div class="message-item" id="m16">
                    <?php
					   $raw_results = mysql_query("SELECT * FROM infouser, comment WHERE infouser.ID_User = comment.ID_User AND ID_User_teman = '$data[ID_User]' ORDER BY ID_Comment DESC");
             
while($data=mysql_fetch_array($raw_results)){
	?>
                    
						<div class="message-inner">
							<div class="message-head clearfix">
								<div class="avatar2 pull-left"><?php echo "<img src='upload/avatar/$data[foto]' height='80' weight='80' />";?></div>
								<div class="user-detail">
									<h5 class="handle"><?php echo $data['fullname'];?></h5>
									<div class="post-meta">
										<div class="asker-meta">
											<span class="qa-message-what"></span>
											<span class="qa-message-when">
												<span class="qa-message-when-data"><?php echo $data['Tanggal'];
												
												if ($_SESSION['iduser'] == $data['ID_User_teman'] || $_SESSION['iduser'] == $data['ID_User'] ) {
					?>
						<div class="row-actions">
						<a href="delete_comment.php?id=<?php echo $data['ID_Comment'];?>&ID_User_teman=<?php echo $data['ID_User_teman'];?>" onClick="return confirm('Hapus comment ini?')" class="delete">Delete</a>
						

						

					</div><?php } ?></span>
											</span>
											<span class="qa-message-who">
											<span class="qa-message-who-pad"></span></span></div>
									</div>
								</div>
							</div>
							<div class="qa-message-content">
								<?php echo $data['comment'];?>
							</div>
					</div>
                    
                    <?php }?>
  </div>
</body>
</html>