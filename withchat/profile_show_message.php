<?php
include('php/connect_database.php');
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
?>
<title>Message::<?php echo $_SESSION['fname']; ?></title>
<link href="css/msg_page.css" rel="stylesheet"/>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// load messages every 1000 milliseconds from server.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('php/chat_request.php?id='+<?php echo $_GET['id']; ?>, load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
	//method to trigger when user hits enter key
	$("#chat_message").keypress(function(evt) {
		if(evt.which == 13) {
			   var user01 = $('#user01').val();
			   var user02 = $('#user02').val();
				var imessage = $('#chat_message').val();
				post_data = {'user01':user01,'user02':user02,'message':imessage};
			 	
		
				$.post('php/chat_request.php', post_data, function(data) {
					
					//append data into messagebox with jQuery fade effect!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//keep scrolled to bottom of chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//reset value of message box
					$('#chat_message').val('');
					
				}).fail(function(err) { 
				
				//alert HTTP server error
				alert(err.statusText); 
				});
			}
	});
});

</script>
 <body>
<div class="cbp-spmenu-middle">
<p>Message</p>
<hr/>
<table>
<tr>
<td>
<p>Friends</p>
<br>
<table class="table3">
<?php
					$kad=mysql_query("SELECT * from friends WHERE (friend_one='$userid' or friend_two='$userid') and status='1'");
					while($dy=mysql_fetch_assoc($kad))
					{
					$yr=$dy['friend_one'];
					$yrt=$dy['friend_two'];
					if($yr=="$userid")
					{
						$sda=mysql_query("SELECT * from user_details WHERE user_id='$yrt'");
						$dwdm=mysql_fetch_array($sda);
							echo '<tr>';
							echo '<td class="namehere">';
							echo '<a href=message_page.php?id=' . $dwdm["user_id"] .'>'.$dwdm['fname']." ".$dwdm['lname'];
							echo '</td>';
							echo '</tr>';									
					}
					else
					{
						$hit=mysql_query("SELECT * from user_details WHERE user_id='$yr'");
					    $dw=mysql_fetch_array($hit);
							echo '<tr>';
							echo '<td class="namehere">';
							echo '<a href=message_page.php?id=' . $dw["user_id"] .'>'.$dw['fname']." ".$dw['lname'];
							echo '</td>';
							echo '</tr>';
					
						}
					}

?>
</table>
   </td>
<td>
<?php
if(isset($_GET['id']))
							{
						$two = $_GET['id'];
						$name = mysql_query("SELECT * from user_details WHERE user_id= $two");
						$naa = mysql_fetch_array($name);
						echo '<div class="chat_box">';
                        echo '<div class="header">'.$naa['fname'].'</div>';
  						echo '<div class="message_box">';
    					echo '</div>';
    					echo '<div class="user_info">';
    echo '<input type="hidden" name="user01" id="user01" value="'.$userid.'" />';
	echo '<input type="hidden" name="user02" id="user02" value="'.$_GET['id'].'" />';
    echo '<input name="chat_message" id="chat_message" type="text" placeholder="Type Message Hit Enter" maxlength="100" /> ';
    echo '</div>';
echo '</div>';
				}
		?> 

</td>
   </tr>
   </table>
   </div>
</body>
<?php
//&& isset($_GET['user1'])
?>