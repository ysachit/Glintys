<?php
include('php/connect_database.php');
?>
<?php
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/layout.css" rel="stylesheet">
<link href="images/logo/favicon.png" rel="icon" />
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>

	<script>
            $(document).ready(function(){
            $(".search").keyup(function() 
            {
            var searchbox = $(this).val();
            var dataString = 'searchword='+ searchbox;
            if(searchbox=='')
            {}
            else
            {
            $.ajax({
            type: "POST",
            url: "search.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
            $("#display").html(html).show();
            }
            });
            }return false; 
            });
            });	
       </script>
        </head>
 <body>  
    <div class="container">
    		<div class="main">
            	<div class="logo">
                  <a href="dashboard.php"><img src="images/logo/logo.png"/></a>
                    </div>
                  <nav>
                   <input type="text" name="search" id="search" class="search">
                   <div id="display">
                   </div>
                   </nav>
		            <ul id="dropdown">
                       <li><a href="dashboard.php">Home</a></li>
		                	<li><a href="message_page.php" id="showLeft">Message</a></li>
			     <li class="low"><?php echo "<img height='30px' width='28px' src="."images/".$_SESSION['profile_pic'].">";  ?> </li>
                <li><a href="#">
				   <?php 
				   echo $_SESSION['fname'];
				   
				     //if($_SESSION['fname'] == NULL)
//					 {
//						 echo $_SESSION['email_id'];
//						 header('Location:../failurecheck.php');
//						 }						
						  ?></a>
				<ul class="noJS">
                <li><a href="update_profile.php?id=<?php echo $userid; ?>" id="account">Account Settings</a></li>
                 <li><a href="change_password.php">Change Password</a></li>
		        <li><a href="find_friends.php">Search Friends</a></li>
                <li><a href="php/logout.php">Logout</a>	</li>
				</ul>
			</li>
	      </ul>		
	    </div>	
    </div>
  </div>
<div class="cbp-spmenu-push">
 <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <table class="leftmenu">
      <tr>
      <td>
      <?php echo "<img src="."images/".$_SESSION['profile_pic'].">";  ?> 
      </td>
      </tr>
      </table> 
      <div>&nbsp;
      </div>  
        <table class="table2">
           <tr>
            <td><a href="message_page.php">Messages &nbsp;<?php
			//$fds = mysql_query("SELECT * FROM chat_me WHERE (user1 = '$userid' or user2 = '$userid') and read_mode = '0'");
			//$numofmsg = MYSQL_NUMROWS($fds); 
			//echo '<font size="2" color="red"><b>(' . $numofmsg . ')</b></font>'; 
            ?></a></td>
            </tr>
            <tr>
            <td><a href="friend_list.php">Request &nbsp;<?php
			$c=mysql_query("SELECT * FROM friends WHERE(friend_two ='$userid') AND status='0'");
			$numberOfRows = MYSQL_NUMROWS($c);	
	
	echo '<font size="2" color="red"><b>(' . $numberOfRows . ')</b></font>'; 
	?>
            </a></td>
            </tr>
            <tr>
            <td><a href="allfriends.php">All Friends &nbsp;<?php
			$c=mysql_query("SELECT * FROM friends WHERE(friend_two ='$userid' or friend_one ='$userid') AND status='1'");
			$numberOfRows = MYSQL_NUMROWS($c);	
	
	echo '<font size="2" color="red"><b>(' . $numberOfRows . ')</b></font>'; 
	?></a></td>
            </tr>
            <tr>
            <td><a href="find_friends.php">Find Friends</a></td>
            </tr>
           </table>
           <br />	
           <hr />	
           <div class="notify">
           <h3>Notifications</h3>
           <marquee direction="up" onmouseover="this.stop()" onmouseout="this.start()">
           <?php
		   $noti = mysql_query("SELECT * from event WHERE WhoInvited = '$userid' or WhoInvited = 'ALL'");
		   if(mysql_num_rows($noti)>=1)
		   {
			   while($no = mysql_fetch_assoc($noti))
			   {
				   echo '* You are Invited in ';
				   echo $no['EventInput']; 
				   echo '<br/>';
				   echo '<br/>';				  
				   }
			   }
		   ?>
            </marquee>				   
	   <br/>
           </div>	
		
        </nav>
        </div>
        </body>
        