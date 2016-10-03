//pemanggilan notifikasi
$(document).ready(function()
{
	setInterval(function() { vpb_notification_display(); }, 3000);
});


//fungsi notifikasi
function vpb_notification_display()
{
	var page_owner = $("#page_owner").val();
	var logged_in_username = $("#logged_in_username").val();
	var dataString = "logged_in_username=" + logged_in_username + "&page_owner=" + page_owner + "&page=vpb_check_friends_request";
	$.ajax({  
		type: "POST",  
		url: "add_or_cancel_friend_ship.php",  
		data: dataString,
		cache: false,
		beforeSend: function() {},  
		success: function(response)
		{
			if(response == "") 
			{}
			else
			{
				$("#vpb_notification_wrapper").hide().show().html(response);
			}
		}
	});
}


//proses pertemanan
function add_or_cancel_friend_ship(logged_in_username,page_owner,action)
{
    var dataString = "logged_in_username=" + logged_in_username + "&page_owner=" + page_owner + "&page=" + action;
    $.ajax({  
        type: "POST",  
        url: "add_or_cancel_friend_ship.php",  
        data: dataString,
		cache: false,
        beforeSend: function() 
        {
            if ( action == "vpb_add_as_friend" )
            {
                $("#vpb_add_as_friend").hide();
                $("#vpb_loading_friend_ship_activities").html('<img src="images/loading.gif" align="absmiddle" alt="Loading...">');
            }
            else if ( action == "vpb_cancel_friendship" )
            {
				$("#vpb_request_sent").html('');
                $("#vpb_cancel_friendship").hide();
                $("#vpb_loading_friend_ship_activities").html('<img src="images/loading.gif" align="absmiddle" alt="Loading...">');
            }
            else { }
        },  
        success: function(response)
        {
            if ( action == "vpb_cancel_friendship" )
			{
                $("#vpb_loading_friend_ship_activities").html('');
                $("#vpb_add_as_friend").show();
				if(response == "cancelled_successfully")
				{
					$("#add_page_owner_id"+page_owner).show();
					$("#page_owner_friends_id"+logged_in_username).hide();
				}
            }
            else if ( action == "vpb_add_as_friend" )
			{
                $("#vpb_loading_friend_ship_activities").html('');
				$("#add_page_owner_id"+page_owner).hide();
				$("#page_owner_friends_id"+logged_in_username).show();
				
				if(response == "friend_ship_confirmed")
				{
					$("#vpb_request_sent").html('');
                	$("#vpb_cancel_friendship").show();
					
				}
				else if(response == "request_sent_successfully")
				{
					$("#vpb_request_sent").html('<span class="vpb_general_button_g" style="float:none;opacity:0.5; cursor:default;">Request Sent</span><br clear="all"><br clear="all"><br clear="all"><br clear="all">');
                	$("#vpb_cancel_friendship").show();
				}
            }
            else { }
			$("#vpb_notification_wrapper").hide();
        }
    }); 
}