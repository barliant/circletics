<?php 
//cek pertemanan
$check_for_logged_in_users_friends = mysql_query("select * from `friends` where `ID_User` = '".mysql_real_escape_string($page_owner)."' order by `id` desc");
?>
<div style="width:300px; float:left;" align="left"><br />
<div class="info" style="font-family:Verdana, Geneva, sans-serif;font-size:16px;-webkit-border-radius: 0px;-moz-border-radius: 0px;border-radius: 0px;"><?php if($page_owner == strip_tags($_SESSION["VALID_USER_ID"])) { ?>Your Friends <?php } else { echo $fullname."'s Friends"; } ?> (<?php echo mysql_num_rows($check_for_logged_in_users_friends); ?>)</div><br clear="all" />
<div style="overflow-x:hidden;overflow-y:auto;height:510px; width:275px; float:left;" align="left">

<?php 
if(mysql_num_rows($check_for_logged_in_users_friends) > 0)
{
	//dapatkan data teman
	while($get_logged_in_users_friends = mysql_fetch_array($check_for_logged_in_users_friends))
	{
		//dapatkan detil teman dari tabel infouser
		$check_friends_full_details = mysql_query("select * from `infouser` where `ID_User` = '".mysql_real_escape_string(strip_tags($get_logged_in_users_friends["friend"]))."'");
		
		if(mysql_num_rows($check_friends_full_details) > 0)
		{
			//dapetin detil teman
			while ($get_friends_full_details = mysql_fetch_array($check_friends_full_details))
			{
				?>
                <div id="page_owner_friends_id<?php echo strip_tags($get_friends_full_details["ID_User"]); ?>">
				<a href="profile_page.php?page_owner=<?php echo base64_encode(strip_tags($get_friends_full_details["ID_User"])); ?>"><div class="vpb_people_you_may_want_to_follow_wrapper">
				<div style="float:left; width:90px;"><img src="upload/avatar/<?php echo $get_friends_full_details['foto'];?>" class="vpb_people_you_may_want_to_add_or_cancel_photos" border="0" align="absmiddle" /></div>
				<div style="float:left; width:140px;"><?php echo strip_tags($get_friends_full_details["fullname"]); ?></div>
				</div>
                </a>
                </div>
                <br clear="all" />
				<?php
			}
		}
	}
}
else
{
	echo '<div class="vpb_infor" align="left">Currently, <b>'.$fullname.'</b> does not have any friend at the moment.</div>';
}
?>

</div>
<br clear="all" />
</div>




</div>
