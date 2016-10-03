<?php
include "config.php"; 

if(isset($_POST["page"]) && !empty($_POST["page"])) 
{
	global $logged_in_username,$page_owner;
	$logged_in_username = trim(strip_tags($_POST["logged_in_username"]));
	$page_owner = trim(strip_tags($_POST["page_owner"]));
	

	
	//buat add teman
	if($_POST["page"] == "vpb_add_as_friend") 
	{
		//cek udah jadi temen ada belum yg nge-request
		$check_request = mysql_query("select * from `friend_request` where `ID_User` = '".mysql_real_escape_string($logged_in_username)."' and `friend` = '".mysql_real_escape_string($page_owner)."' or `ID_User` = '".mysql_real_escape_string($page_owner)."' and `friend` = '".mysql_real_escape_string($logged_in_username)."'");
		
		if(mysql_num_rows($check_request) > 0) //kalo udah ditambah, pertemanan dikonfirmasi
		{
			@mysql_query("delete from `friend_request` where `ID_User` = '".mysql_real_escape_string($logged_in_username)."' and `friend` = '".mysql_real_escape_string($page_owner)."'");
			@mysql_query("delete from `friend_request` where `ID_User` = '".mysql_real_escape_string($page_owner)."' and `friend` = '".mysql_real_escape_string($logged_in_username)."'");
			
			
			@mysql_query("insert into `friends` values('', '".mysql_real_escape_string($logged_in_username)."', '".mysql_real_escape_string($page_owner)."')");
			@mysql_query("insert into `friends` values('', '".mysql_real_escape_string($page_owner)."', '".mysql_real_escape_string($logged_in_username)."')");
			echo "friend_ship_confirmed";
		}
		else //kalo belom, kirim permintaan
		{
			//cek dulu udah jadi temen apa belum
			$check_friend_ship = mysql_query("select * from `friends` where `ID_User` = '".mysql_real_escape_string($page_owner)."' and `friend` = '".mysql_real_escape_string($logged_in_username)."'");
			
			if(mysql_num_rows($check_friend_ship) > 0)
			{
				@mysql_query("insert into `friends` values('', '".mysql_real_escape_string($logged_in_username)."', '".mysql_real_escape_string($page_owner)."')");
				echo "friend_ship_confirmed";
			}
			else
			{
				@mysql_query("delete from `friends` where `ID_User` = '".mysql_real_escape_string($logged_in_username)."' and `friend` = '".mysql_real_escape_string($page_owner)."'");
				@mysql_query("insert into `friend_request` values('', '".mysql_real_escape_string($logged_in_username)."', '".mysql_real_escape_string($page_owner)."')");
				echo "request_sent_successfully";
			}
		}
	}
	
	
	
	//buat ngehapus temen
	elseif($_POST["page"] == "vpb_cancel_friendship") 
	{
		mysql_query("delete from `friend_request` where `ID_User` = '".mysql_real_escape_string($logged_in_username)."' and `friend` = '".mysql_real_escape_string($page_owner)."'");
		
		mysql_query("delete from `friend_request` where `ID_User` = '".mysql_real_escape_string($page_owner)."' and `friend` = '".mysql_real_escape_string($logged_in_username)."'");
		
		mysql_query("delete from `friends` where `ID_User` = '".mysql_real_escape_string($logged_in_username)."' and `friend` = '".mysql_real_escape_string($page_owner)."'");
		mysql_query("delete from `friends` where `ID_User` = '".mysql_real_escape_string($page_owner)."' and `friend` = '".mysql_real_escape_string($logged_in_username)."'");
		
		echo "vpb_cancel_friendship";
	}
	
	
	
	//untuk cek permintaan jadi temen
	elseif($_POST["page"] == "vpb_check_friends_request") 
	{
		$logged_in_username = trim(strip_tags($_POST["logged_in_username"]));
		
		if(!empty($logged_in_username))
		{
			$check_request = mysql_query("select * from `friend_request`,infouser where friend_request.ID_User = infouser.ID_User AND `friend` = '".mysql_real_escape_string($logged_in_username)."' order by `id` asc limit 1"); //First Request receive, first to respond to
				
			if(mysql_num_rows($check_request) > 0) //kalo ada permintaan temen, munculin notifikasi
			{
				$get_request_details = mysql_fetch_array($check_request);
				
				//cek temen yg kirim permintaan dari tabel infouser
				$check_request_info = mysql_query("select * from `infouser` where `ID_User` = '".mysql_real_escape_string($get_request_details["ID_User"])."'");
				//dapetin user yg kirim request
				$get_request_info = mysql_fetch_array($check_request_info);
				
				//cek user dari tabel infouser
				$check_logged_in_user_info = mysql_query("select * from `infouser` where `ID_User` = '".mysql_real_escape_string($logged_in_username)."'");
				//dapetin info dari user
				$get_logged_in_user_info = mysql_fetch_array($check_logged_in_user_info);
				
				//munculin notifikasi
				?>
				<div style="width:260px;">
				<div style=" font-family:Verdana, Geneva, sans-serif; font-size:14px; margin-bottom:8px;" align="left">Hello <?php echo strip_tags($get_logged_in_user_info["fullname"]); ?></div>
				<div style="font-family:Verdana, Geneva, sans-serif; font-size:11px; line-height:18px;" align="left">A user whose detail is shown below would like to add you as a friend.</div><br clear="all" />
				
				<div style=" float:left; width:80px;" align="left"><a href="index.php?page_owner=<?php echo base64_encode(strip_tags($get_request_info["ID_User"])); ?>"><img src="upload/avatar/<?php echo $get_request_details['foto'];?>"" class="vpb_people_you_may_want_to_add_or_cancel_photos" style="width:75px; height:65px;" border="0" align="absmiddle" /></a></div>
				<div style=" float:left;" align="left"><span class="ccc"><a href="index.php?page_owner=<?php echo base64_encode(strip_tags($get_request_info["ID_User"])); ?>"><font style="color:blue;font-family:Verdana, Geneva, sans-serif; font-size:14px;"><?php echo strip_tags($get_request_info["fullname"]); ?></font></a></span></div><br clear="all" /><br clear="all" /><br clear="all" />
				
				<div style="width:230px;" align="center">
				<div style="margin-right:30px;" class="vpb_general_button_g" onClick="add_or_cancel_friend_ship('<?php echo $logged_in_username; ?>','<?php echo strip_tags($get_request_info["ID_User"]); ?>','vpb_add_as_friend');">Accept</div>
				<div style="" class="vpb_general_button_r" onClick="add_or_cancel_friend_ship('<?php echo $logged_in_username; ?>','<?php echo strip_tags($get_request_info["ID_User"]); ?>','vpb_cancel_friendship');">Decline</div>
				<br clear="all" />
				</div>
				</div>
				<?php
			}
		}
	}	
	else
	{
		//blank aja
	}
}
?>