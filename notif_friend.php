<?php
 //kalo ada di halaman temen, munculin add friend atau cancel friend aja
if($page_owner != strip_tags($_SESSION["VALID_USER_ID"]))
{
	//cek user udah pernah kirim permintaan jadi teman belum ke pemilik halaman
	$check_for_friend_request = mysql_query("select * from `friend_request` where `ID_User` = '".mysql_real_escape_string($_SESSION["VALID_USER_ID"])."' and `friend` = '".mysql_real_escape_string($page_owner)."'");
	
	if(mysql_num_rows($check_for_friend_request) > 0)
	{
		?>
        <div class="friend_ship_wrapper" style="padding-bottom:13px;">
        <br clear="all" />
        <span id="vpb_request_sent"><span class="vpb_general_button_g" style="float:none;opacity:0.5;">Request Sent</span>
        <br clear="all"><br clear="all"><br clear="all"><br clear="all"></span>
        
        <span style="float:none;" class="vpb_general_button_r" id="vpb_cancel_friendship" onClick="add_or_cancel_friend_ship('<?php echo $_SESSION["VALID_USER_ID"]; ?>','<?php echo $page_owner; ?>','vpb_cancel_friendship');">Cancel Request</span>
        
        <span style="display:none;float:none;" class="vpb_general_button_g" id="vpb_add_as_friend" onClick="add_or_cancel_friend_ship('<?php echo $_SESSION["VALID_USER_ID"]; ?>','<?php echo $page_owner; ?>','vpb_add_as_friend');">Add as Friend</span>
        <br clear="all" /><br clear="all" />
        </div>
        <?php
	}
	else
	{
		//cek temen dari halaman yg lagi diliat
		$check_friend_ship = mysql_query("select * from `friends` where `ID_User` = '".mysql_real_escape_string($_SESSION["VALID_USER_ID"])."' and `friend` = '".mysql_real_escape_string($page_owner)."'");
		
		?>
		<div class="friend_ship_wrapper" style="padding-bottom:13px;">
		<?php
		
		if(mysql_num_rows($check_friend_ship) < 1)
		{
			?>
			<br clear="all" />
			<span id="vpb_loading_friend_ship_activities"></span>
             <span id="vpb_request_sent"></span>
             
			<span class="vpb_general_button_g" style="float:none;" id="vpb_add_as_friend" onClick="add_or_cancel_friend_ship('<?php echo $_SESSION["VALID_USER_ID"]; ?>','<?php echo $page_owner; ?>','vpb_add_as_friend');">Add as Friend</span>
			
			<span style="display:none;float:none;" class="vpb_general_button_r" id="vpb_cancel_friendship" onClick="add_or_cancel_friend_ship('<?php echo $_SESSION["VALID_USER_ID"]; ?>','<?php echo $page_owner; ?>','vpb_cancel_friendship');">Cancel Request</span>
			<br clear="all" /><br clear="all" />
			<?php
		}
		else
		{
			?>
            <br clear="all" />
			<span id="vpb_loading_friend_ship_activities"></span>
             <span id="vpb_request_sent"></span>
             
			<span class="vpb_general_button_r" style="float:none;" id="vpb_cancel_friendship" onClick="add_or_cancel_friend_ship('<?php echo $_SESSION["VALID_USER_ID"]; ?>','<?php echo $page_owner; ?>','vpb_cancel_friendship');">Cancel Friend</span>
            
			
			<span style="display:none;float:none;" class="vpb_general_button_g" id="vpb_add_as_friend" onClick="add_or_cancel_friend_ship('<?php echo $_SESSION["VALID_USER_ID"]; ?>','<?php echo $page_owner; ?>','vpb_add_as_friend');">Add as Friend</span>
            <br clear="all" /><br clear="all" />
			<?php
		}
		?>
		</div>
		<?php
	}
}
else
{
	//kalo di profil sendiri jangan dimunculin tombol add atau cancel friend
}
?>    

