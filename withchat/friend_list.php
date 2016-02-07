<?php
include('php/connect_database.php');
include('profile_show.php');
include('online_friends.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/middle.css" rel="stylesheet" />
<title>Friends & Request</title>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link rel="stylesheet" href="css/colorbox.css" />
		<script src="js/jquery.colorbox.js"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
<script>
$(document).ready(function(){
  
 $('.status').focus(function(){
   
  $('.status').addClass('statusfocus');
  $('.postbar').show();
   
 });  
});
function form_validate()
{
	if(statusform.dialoge.value=='')
	{
		alert ("Please enter something to share");
		return false();
		}
	}
</script>
	   </head>
 <body> 
  <nav class="cbp-spmenu-middle">
    <nav class="middle_side1">
      <div>
     <div class="frd">
     <p> All Friend Request</p>
     <br />
     <hr />
     <br />
     <?php
	$abs="SELECT * from user_details WHERE user_id IN(SELECT friend_one from friends WHERE friend_two=$userid and status='0')";
	$das=mysql_query($abs);
	while($ro= mysql_fetch_assoc($das))
	 {
		 echo '<table>';
		 echo '<tr>';
		 echo '<td rowspan="3">';
		 echo "<img src="."images/".$ro['profile_pic'].">";
		 echo '</td>';
		 echo '<td class="name">';
		 echo $ro['fname']." ".$ro['lname'];
		 echo '</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td>';
		 echo $ro['college'];
		 echo '</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td>';
echo '<a href=php/confirm_request.php?id=' . $ro['user_id'] . '>' ." "."<input type='submit' style='width:200px;' name='id' value='Confirm Request'>".'</a>';
		 echo '</td>';
		 echo '</tr>';
		 echo '</table>';
		 }
	?>
    <br />
    <br />
    <hr />
    <p>All Friends</p>
    <hr />
    <?php
  $cd="SELECT * from user_details WHERE user_id IN(SELECT friend_two FROM friends WHERE friend_one=$userid AND status='1')";
	$gd=mysql_query($cd);
	while($hd= mysql_fetch_assoc($gd))
	{ 
	     echo '<table>';
		 echo '<tr>';
		 echo '<td rowspan="2">';
		 echo "<img src="."images/".$hd['profile_pic'].">";
		 echo '</td>';
		 echo '<td class="name">';
		 echo $hd['fname']." ".$hd['lname'];
		 echo '</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td>';
		 echo $hd['college'];
		 echo '</td>';
		 echo '</tr>';
		 echo '</table>';
		}
	 $dc="SELECT * from user_details WHERE user_id IN(SELECT friend_one FROM friends WHERE friend_two=$userid AND status='1')";
	$dg=mysql_query($dc);
	while($dh= mysql_fetch_assoc($dg))
	{ 
	     echo '<table>';
		 echo '<tr>';
		 echo '<td rowspan="2">';
		 echo "<img src="."images/".$dh['profile_pic'].">";
		 echo '</td>';
		 echo '<td class="name">';
		 echo $dh['fname']." ".$dh['lname'];
		 echo '</td>';
		 echo '</tr>';
		 echo '<tr>';
		 echo '<td>';
		 echo $dh['college'];
		 echo '</td>';
		 echo '</tr>';
		 echo '</table>';
		}	
    ?>
    </div>   
  </div>    
 </nav>
 	<div class="middle_side2">
       <?php include('eventpage.php'); ?>
    </div>
  </div>
</nav>
   </body>
 </html>