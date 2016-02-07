<?php
include('php/connect_database.php');
?>
<?php
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
		$userid=$_SESSION['userid'];
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/layout.css" rel="stylesheet">
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
		                	<li><a href="#" id="showLeft">Message</a></li>
			     <li class="low"><?php echo "<img height='30px' width='28px' src="."images/".$_SESSION['profile_pic'].">";  ?> </li>
                <li><a href="#"><?php echo $_SESSION['fname']; ?></a>
				<ul class="noJS">
                <li><a href="general_profile_update.php" id="account">Account Setting</a></li>	
                <li><a href="advance_profile_update.php">Advance Setting</a></li>
		        <li><a href="find_friends.php">Search Friend</a></li>
		        <li><a href="#">Logout</a>	</li>
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
						$result = mysql_query("SELECT * FROM friend_list WHERE friend_id = $member_id");
						
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
		//$clg=mysql_query("SELECT * From user_details WHERE id='".$_SESSION['userid']."'");
		//$row=mysql_fetch_array($clg);
		//echo $row['study_in'];
		 ?></i></b></td>
        </tr>
        <tr align="center">
        <td>Current Status : <b><?php 
//		$clg=mysql_query("SELECT * From user_details WHERE id='".$_SESSION['userid']."'");
//		$row=mysql_fetch_array($clg);
//		echo $row['status'];
		 ?></b></td>
        </tr>
      </table> 
      <table class="table2" style="margin-top:10px;">
           <tr>
            <td><?php 
	if (isset($_GET['id']))
	{
	$member_id = $_GET['id'];
			$result1 = mysql_query("SELECT * FROM friend_list WHERE friend_id = $member_id");
			{
				}
			
			while($row = mysql_fetch_array($result1))
			  {
			  $friendemail=$row['email_id'];
			  }
$result = mysql_query("SELECT * FROM friend_list WHERE addby='$friendemail' and status='accepted' ");
	
	$numberOfRows = MYSQL_NUMROWS($result);	
	$photo=$_GET['id'];
$result2 = mysql_query("SELECT * FROM friend_list WHERE friend_id='$photo'");


while($row = mysql_fetch_array($result2))
  {
  
  echo '<a href=friendsfriends.php?id=' . $row["friend_id"] . '>' . "Friends" . '   ('. $numberOfRows . ')' . '</a>';
 
  }
	}
	?></td>
            </tr>
          </table>	
      <div>&nbsp;
      </div>  
        
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
       <div class="friend_list">
       <?php 
	   $email_id=$_SESSION['email_id'];
$result = mysql_query("SELECT * FROM friend_list WHERE addby='$email_id' and status='accepted' ORDER BY RAND() LIMIT 4");

echo "<br />";
if(!$result)
{
	print 'You doesnt have a friend';
	}
else{	
while($row = mysql_fetch_array($result))
  {
  echo "<img width='30px' height='26px' src="."images/".$row['profile_pic'].">";
  echo '<a href=friend_profile.php?id=' . $row["friend_id"] . '>' . $row['fname'] ." ".$row['lname'].'</a>';
  echo '<br>';
  }
}
	?>
    </div>
  </nav>
		
