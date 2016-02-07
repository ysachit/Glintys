<?php
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
		$userid=$_SESSION['userid'];
		
include('php/connect_database.php');
include('online_friends.php');
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/layout.css" rel="stylesheet">
<title><?php echo $_SESSION['fname']; ?> :Your Friend Profile</title>
<script src="js/modernizr.custom.js"></script>
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
				   
				     if($_SESSION['fname'] == NULL)
					 {
						 echo $_SESSION['email_id'];
						 header('Location:../failurecheck.php');
						 }						
						  ?></a>
				<ul class="noJS">
                <li><a href="update_profile.php?id=<?php echo $userid; ?>" id="account">Account Settings</a></li>
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
      <?php
     if (isset($_GET['id']))
							{
						$member_id = $_GET['id'];
						$result = mysql_query("SELECT * FROM user_details WHERE user_id = $member_id");
						
						$row = mysql_fetch_array($result);
						if (!$result) 
												{
												echo "Please Enter into valid region";
												}
												else{
						echo "<img src="."images/".$row['profile_pic'] .">";
						 
						}
						}
						?> 
      </td>
      </tr>
        <tr valign="top" align="center">
         <td id="name"><?php echo $row['fname']." ".$row['lname']; ?></td></td>
        </tr>
        <tr align="center">
        <td style="color:#000"><b><i>
		<?php 
		$clg=mysql_query("SELECT * From user_details WHERE user_id='$member_id'");
		$row=mysql_fetch_array($clg);
		echo $row['college'];
		 ?></i></b></td>
        </tr>
        <tr align="center">
        <td>Current Status : <b><?php 
		$clg=mysql_query("SELECT * From user_details WHERE user_id='$member_id'");
		$row=mysql_fetch_array($clg);
		echo $row['status'];
		 ?></b></td>
        </tr>
                <tr align="center">
        <td>&nbsp;</td>
        </tr>
       <tr>
    <td><?php
	$o="SELECT * FROM friends WHERE(friend_one ='$userid' OR friend_two ='$userid') AND (friend_one ='$member_id' OR friend_two ='$member_id')";
	$rst=mysql_query($o);
	$ro=mysql_fetch_array($rst);
	if(!$ro)
	{
	echo '<a href=php/sendrequest.php?id=' . $_GET["id"] . '>' ." "."<input type='submit' style='width:200px;' name='id' value='Send Friend Request'	 >".'</a>';
		}
elseif($ro['friend_one']==$userid && $ro['status']=='0')
{
	echo "<input type='submit' style='width:200px; margin-left:15px;' name='id' value='Friend Request sent'>";
	}
elseif($ro['friend_two']==$userid && $ro['status']=='0')
{
	echo '<a href=php/confirm_request.php?id=' . $ro['friend_one'] . '>' ." "."<input type='submit' style='width:200px;' name='id' value='Confirm Request'	 >".'</a>';
	}	
	else
	{
	 
	
	}	
if(($ro['friend_one']==$userid or $ro['friend_two']==$userid) && $ro['status']=='1')
{?>
	<input type='submit' style='width:200px; margin-left:15px;' name='id' value='Friends' >
	
	<?php }
    ?>
    </td>
    </tr>
      </table> 
      <table class="table2" style="margin-top:10px;">
           <tr>
            <td>
			<?php 
$o="SELECT * FROM friends WHERE(friend_one ='$member_id' OR friend_two ='$member_id') AND status='1'";
	$rsut=mysql_query($o);
	$numberOfRows = MYSQL_NUMROWS($rsut);	
  echo '<a href=friendsfriends.php?id=' . $row["user_id"] . '>' . "Friends" . '   ('. $numberOfRows . ')' . '</a>';
	?>
    </td>
            </tr>
          </table>	
      <br />        
	   </nav>
   <?php
   include('mainpage1.php');
   ?>    
   
        </body>
</html>        
		