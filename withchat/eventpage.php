<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" /> 
   <script type="text/javascript">
   
   </script>
   <style>
   .io21 h2
   {
	   margin-left:70px;
	   color:#0C9;
	   }
	 h3
	 {
		 color:#0c9;
		 font-size:18px;
		 }  
   </style>
</head>
<body>
<div class="io21">
      <div>
        <h3 align="center">Events</h3><br />
          <div align="center">
        <form action="php/event.php" method="post" action="php/event.php">
          <input type="text" name="event_name" maxlength="40" placeholder="Event Name" pattern="[a-zA-Z ]{3,15}" required="required"/>
            <input type="date" maxlength="50" name="onday" min="2014-09-08" required="required"/><br />
             Time: <select name="time_given">
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
            </select><br />
            <input type="text" name="place" maxlength="100" placeholder="Where" pattern="[a-zA-Z ]{3,15}" required="required"/><br />
            <input type="text" name="people" maxlength="100" placeholder="Who Invited ex-ALL" required="required"/><br />
           <input type="submit" name="event_submit" value="Create Event"/></div>
        </form>
        <br clear="all" />
        <div id="ShowEvents" align="center">
          <?php 
		  ?>
        </div> 
        <br />
        <hr />
        <h2>Upcoming Events</h2>
        <br />
          <?php  
		  $limit = "";
$users_ip = $_SERVER['REMOTE_ADDR'];
$result = mysql_query("SELECT * FROM event where users_ip = '".$users_ip."' order by id desc ".$limit);
while ($row = mysql_fetch_array($result))
{?>
   <div class="show_event" style="margin-left:70px;">
   	   <?php echo "<img height='100px'; width='150px;' src="."eventpic/".$row['event_pic'].">"; ?><br>
	   <label style="float:left" class="text">
       
	   <b style="font-size:18px;"><?php 
	    echo $row['event_name'];?></b>
	   <br />
	   <?php 
	    echo $row['place'];?>
	   <br />
	   <?php 
	    echo $row['onday'];?>
	   </label>
	   <a href="event.php?eventid=<?php 
	    echo $row['id']?>" >*</a>
		<br clear="all" />
        <br />
   </div>
<?php 
}
if(isset($_GET['eventid']))
{
mysql_query("DELETE FROM event where id='$_GET[eventid]'");
header("Location: dashboard.php");
}
?>
    </div>
      <br />
      <hr />
      <br />
  
  
 <!--   Suggesion Page --> 
  <h3 align="center">People You May Know</h3>
	  <div class="rightright2">	  
	  <?php 
$result = mysql_query("SELECT * FROM user_details WHERE(user_id != '".$_SESSION['userid']."') ORDER BY RAND() LIMIT 2");

  echo "<br/>";
while($row = mysql_fetch_array($result))
 {
  echo '<table>';
  echo '<tr>';
  echo '<td rowspan="2">';
  echo "<img height='50px' width='50px' src="."images/".$row['profile_pic'].">";
  echo '</td>';
  //echo '<td height="16">&nbsp;</td>';
//  //echo '</tr>';
//  //echo '<tr>';
  echo '<td>';
  //echo '<div align="left">';
  echo '&nbsp;&nbsp;';
  echo '<a href=friend_profile1.php?id=' . $row["user_id"] . '>' . $row['fname'] . '</a>';
//  //echo '</div>';
  echo '</td>';
  echo '</tr>';
  echo '<tr>';
  echo '<td style="font-size:10px;">&nbsp';
  echo $row["college"];
  echo '</td>';
  echo ' </tr>';
  echo '</table>';
  echo '<br>';
} 
?>
	  </div>
     </div> 