<?php
include('php/connect_database.php');
?>
<?php
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php?status=failure");
			}
		$userid=$_SESSION['userid'];
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/chat.css" />
</head>
<body>

		<nav class="cbp-chat cbp-chat-horizontal cbp-chat-bottom">
			<h3 class="toggle-menu01 menu-bottom">Chat</h3>
              <?php
					$ask=mysql_query("SELECT * from friends WHERE (friend_one='$userid' or friend_two='$userid') and status='1'");
					while($da=mysql_fetch_assoc($ask))
					{
					$ab=$da['friend_one'];
					$abc=$da['friend_two'];
					if($ab=="$userid")
					{
						$dsa=mysql_query("SELECT * from user_details WHERE user_id='$abc'");
						$d=mysql_fetch_array($dsa);
						 $online = mysql_query("SELECT * from online_set WHERE user_id ='$abc'");
						 $ads = mysql_fetch_array($online);
						   if($ads['status']== 1)
						      {?>0
                                 <?php 
								  }
							echo '<a href="message.php">'.$d['fname']." ".$d['lname'].'</a>';
							echo '<br>';										
					}
					else
					{
						$sac=mysql_query("SELECT * from user_details WHERE user_id='$ab'");
					    $dw=mysql_fetch_array($sac);
						$online = mysql_query("SELECT * from online_set WHERE user_id ='$ab'");
						 $ay = mysql_fetch_array($online);
						   if($ay['status']== 1)
						      {?>0
                                 <?php 
								  }
							echo '<a href="message.php">'.$dw['fname']." ".$dw['lname'].'</a>';
							echo '<br>';					
						}
					}
					?>
			
		</nav>
			
		<!--load jQuery, required-->
		<script src="js/jquery-1.9.1.min.js"></script>
		<!--load jPushMenu, required-->
		<script src="js/jPushMenu.js"></script>
		
		<!--call jPushMenu, required-->
		<script>
		jQuery(document).ready(function($) {
			$('.toggle-menu01').jPushMenu();
		});
		</script>

	</body>
</html>
