<?php
include('php/connect_database.php');
include('profile_show.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/middle.css" rel="stylesheet" />
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
      
    </nav>
	<div class="middle_side2">
        <h4>Events</h4>
      <div>
        <form action="" method="post" name="EventForm" id="EventForm">
          <input id="EventInput" name="EventInput" maxlength="40"  value="" />
          <div id="EventBox">
            <input type="date" value="Today" />
            <select id="start_time_min" name="start_time_min">
              <option value="00:00">12:00 am</option>
              <option value="00:30">12:30 am</option>
              <option value="1:00">1:00 am</option>
              <option value="1:30">1:30 am</option>
              <option value="2:00">2:00 am</option>
              <option value="2:30">2:30 am</option>
              <option value="3:00">3:00 am</option>
              <option value="3:30">3:30 am</option>
              <option value="4:00">4:00 am</option>
              <option value="4:30">4:30 am</option>
              <option value="5:00">5:00 am</option>
              <option value="5:30">5:30 am</option>
              <option value="6:00">6:00 am</option>
              <option value="6:30">6:30 am</option>
              <option value="7:00">7:00 am</option>
              <option value="7:30">7:30 am</option>
              <option value="8:00">8:00 am</option>
              <option value="8:30">8:30 am</option>
              <option value="9:00">9:00 am</option>
              <option value="9:30">9:30 am</option>
              <option value="10:00">10:00 am</option>
              <option value="10:30">10:30 am</option>
              <option value="11:00">11:00 am</option>
              <option value="11:30">11:30 am</option>
              <option value="12:00">12:00 pm</option>
              <option value="12:30">12:30 pm</option>
              <option selected="selected" value="13:00">1:00 pm</option>
              <option value="13:30">1:30 pm</option>
              <option value="14:00">2:00 pm</option>
              <option value="14:30">2:30 pm</option>
              <option value="15:00">3:00 pm</option>
              <option value="15:30">3:30 pm</option>
              <option value="16:00">4:00 pm</option>
              <option value="16:30">4:30 pm</option>
              <option value="17:00">5:00 pm</option>
              <option value="17:30">5:30 pm</option>
              <option value="18:00">6:00 pm</option>
              <option value="18:30">6:30 pm</option>
              <option value="19:00">7:00 pm</option>
              <option value="19:30">7:30 pm</option>
              <option value="20:00">8:00 pm</option>
              <option value="20:30">8:30 pm</option>
              <option value="21:00">9:00 pm</option>
              <option value="21:30">9:30 pm</option>
              <option value="22:00">10:00 pm</option>
              <option value="22:30">10:30 pm</option>
              <option value="23:00">11:00 pm</option>
              <option value="23:30">11:30 pm</option>
            </select>
            <br clear="all" />
            <input id="Where" name="Where" maxlength="100" value="" />
            <br clear="all" />
            <input id="WhoInvited" name="WhoInvited" maxlength="100"  value="" />
            <br clear="all" />
           <input type="submit" value="Create Event" /></div>
        </form>
        <br clear="all" />
        <div id="ShowEvents" align="center">
          <?php 
		  	include_once('event.php');?>
        </div>
      </div>
      
      	
	 <h3 align="center">People You May Know</h3>	  
	  <?php 

$result = mysql_query("SELECT * FROM user_details ORDER BY RAND() LIMIT 2");

   echo "<br/>";
while($row = mysql_fetch_array($result))
 {
  echo '<table>';
  echo '<tr>';
  echo '<td rowspan="2">';
  echo "<img height='50px' width='50px' src="."images/".$row['profile_pic'].">";
  echo '</td>';
  //echo '<td height="16">&nbsp;</td>';
  //echo '</tr>';
  //echo '<tr>';
  echo '<td>';
  //echo '<div align="left">';
  echo '&nbsp;&nbsp;';
  echo '<a href=friend_profile1.php?id=' . $row["user_id"] . '>' . $row['fname'] . '</a>';
  //echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td style="font-size:10px;">&nbsp';
  echo $row["college"];
  echo '</td>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';
  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';		
   }
 
?>
    </div>
  </div>
</nav>

   </body>