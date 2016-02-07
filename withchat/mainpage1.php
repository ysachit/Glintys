<?php
include('php/connect_database.php');
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
    <form action="php/writewall.php" method="post" name="statusform" enctype="multipart/form-data">
 <textarea name="dialoge" class="status" id="status" required="required" placeholder="Write on wall..." title="Write on wall..."></textarea>
    <div id="postbar" class="postbar">
    <input type="hidden" name="friend_id" value="<?php echo $_GET['id']; ?>" />
    <input name="post" type="submit" value="Post" onclick="form_validate()"  class="postbtn" />
     </div>
   </form>
   <br /><br />
  <?php 
//echo "______________________________________________________<br>";
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE user='".$member_id."' AND mode = '0' ORDER BY messages_id DESC";
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result))
{
    //echo "POST by " . $_SESSION['fname'] . ": {$row['messages']} <br><br>";
	//echo'<input type="text" name="firstname" value="'. $row['messages_id'] .'">'; 
	?>
   <?php 
   echo '<div class="pic1">';
     echo '<table>';
	  echo '<tr>';
	  echo '<td rowspan="2" class="title">';
    echo "<img width=50 height=50 alt='Unable to View' src="."images/".$row['picture'].">";
	echo '</td>';
	echo '<td>';
	//echo '<div class="message">';
	echo "Posted by <b>{$row['poster']} <b>";
	//echo '</div>';
	echo '</td>';
	echo '<tr>';
	echo '<td>';
	echo '<font color="#006666" class="date">On&nbsp;';
	$days = floor($row['TimeSpent'] / (60 * 60 * 24));
			$remainder = $row['TimeSpent'] % (60 * 60 * 24);
			$hours = floor($remainder / (60 * 60));
			$remainder = $remainder % (60 * 60);
			$minutes = floor($remainder / 60);
			$seconds = $remainder % 60;
	if($days > 0)
			echo date('F d Y', $row['date_created']);
			elseif($days == 0 && $hours == 0 && $minutes == 0)
			echo "few seconds ago";		
			elseif($days == 0 && $hours == 0)
			echo $minutes.' minutes ago';
		
			echo '</font>';
		echo '</td>';
		echo '</tr>';
echo '</table>';		
		
	echo '<table>';			
		echo '<tr>';
		echo '<td colspan="4">';
	echo "<div class='post'>{$row['dialoge']}";
	echo '<br>';
	if($row['pic']=='')
	{
		
		}
		else
		{
			echo "<img class='group3' width=85% height=280 alt='Unable to View' src="."picupdate/".$row['pic'].">";
			echo "<a class='group3' href='"."picupdate/".$row['pic']."'>";
			}
		
	echo '</td>';
	echo '</tr>';
	
$result1 = mysql_query("SELECT * FROM likeme WHERE like_post='". $row['messages_id'] ."'");
if($row2 = mysql_fetch_array($result1))
  {
 $numberOfRows = MYSQL_NUMROWS($result1);	
  $numberoflikes=$numberOfRows;
  $numberoflikes1=$numberOfRows-1;
  if  (($row2['likeby'])==($_SESSION['userid']) || ($numberoflikes1 > 0))
  {
	echo '<tr>';
	echo '<td>';
	//echo '<tr class="like">';
	//echo '<td>';
	echo '<form action="php/dislike.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['userid'] .'">';
	echo '<input type="submit" Value="Dislike" id="like" name="submit">';
	echo '</form>';
	echo '</td>';
	echo '<td>'; 
  echo '<font color="blue"><b>' . 'You' . ' ' . '&' . ' ' . $numberoflikes1 . '</b></font>' . ' ' . 'People like this.';
  
  }
  elseif (($row2['likeby'])==($_SESSION['userid'])&& ($numberoflikes1 == 0))
  {
	  echo '<tr>';
	echo '<td>';
	//echo '<tr class="like">';
	//echo '<td>';
	echo '<form action="php/Dislike.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['userid'] .'">';
	echo '<input type="submit" Value="Dislike" id="like" name="submit">';
	echo '</form>';
	echo '</td>';
	echo '<td>';
    echo '<font color="blue"><b>' . 'You' . '</b></font>' . ' ' . 'like this';
    }
  else
  {
	  echo '<tr>';
	echo '<td>';
	//echo '<tr class="like">';
	//echo '<td>';
	echo '<form action="php/like.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['userid'] .'">';
	echo '<input type="submit" Value="like" id="like" name="submit">';
	echo '</form>';
	echo '</td>';
	echo '<td>';
  echo '<font color="blue"><b>' . $numberoflikes .'</b></font>' . 'people'  . 'like this';
   }  
  }
  if(!$row2)
  {
	  echo '<tr>';
	echo '<td>';
	//echo '<tr class="like">';
	//echo '<td>';
	echo '<form action="php/like.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['userid'] .'">';
	echo '<input type="submit" Value="like" id="like" name="submit">';
	echo '</form>';
	echo '</td>';
	echo '<td>';  
   }  
	
//	echo '<tr>';
//	echo '<td>';
//	//echo '<tr class="like">';
//	//echo '<td>';
//	echo '<form action="php/like.php" method="post">'; 
//	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
//	echo '<input type="hidden" name="cam" value="'. $_SESSION['userid'] .'">';
//	echo '<input type="submit" Value="like" id="like" name="submit">';
//	echo '</form>';
//	echo '</td>';
//	echo '<td>';

	//echo '<div class="delete">';
	//echo '<font color="White">';
	//echo '<a href=php/deletepost.php?id=' . $row["messages_id"] . '>' . "Delete" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	//echo'</div>';
	echo '</td>';
	echo '</tr>';
	
	//echo '</td>';	
	//echo '</tr>';
	
			//echo '<form action="like.php" method="post">';
			//echo'<input type="submit" name="addfriend" value="Like">';
			
			//echo '</form';		
   echo '</div>'; //Pic1 Div End Here
	 //echo"Comment:". '<input type="text" name="comment" class="textfield">';
	 //echo'<input type="submit" name="addfriend" value="addfriend">';
	//echo "______________________________________________________<br>";
	echo '<br>';
	//echo '</div>';
	echo '</table>';
	
	
	$query1  = "SELECT *,
		UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM post_comment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id DESC LIMIT 4";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{
		echo '<table>';
		//New Tr
		echo '<tr>';
		echo '<td rowspan="2">';
		//echo '<tr>';
	    //echo '<td rowspan="2">';
		//echo '<div class="postcomment">';
		echo "<img width=40 height=40 alt='Unable to View' src="."images/".$row1['pic'].">";
		echo '</td>';
		echo '<td>';
		//echo '<div class="comment_by">';
		echo '<font color="blue">';
		echo $row1['commented_by'];
		echo '</font>';
		echo '&nbsp;&nbsp;';
		echo $row1['content'];
		echo '</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>';
		echo '<font color="blue">';
						$days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
						$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
						$hours = floor($remainder / (60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$seconds = $remainder % 60;	
						if($days2 > 0)	
							echo date('F d Y', $row1['date_created']);
						elseif($days2 == 0 && $hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($days2 == 0 && $hours == 0)
							echo $minutes.' minutes ago';
											
	echo '</font>';
						   // echo '&nbsp;';			
							//echo '<div class="delete">';
						//echo '<font color="White">';
						//echo '<a href=php/deletepostcomment.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';
						echo '</font>';	
						echo '&nbsp;';
						echo'</div>';
			
	//echo '</div>';
	//echo '</div>';
	echo '</td>';
	echo '</tr>';
	//echo '</td>';
	//echo '</tr>';
	echo '</table>';
	
	}
	echo '<div class="comments clearfix">';
				echo '<div class="pull-left lh-fix">';
					echo "<img src="."images/".$_SESSION['profile_pic'].">";
				echo '</div>';

				echo '<div class="comment-text pull-left">';
					echo '<textarea class="text-holder" placeholder="Write a comment.." id="message"></textarea>';
				echo '</div>';
			echo '</div>';
		  echo '<br><br>';
}
?>&nbsp; 
<!--
<table>
<tr>
<td><input type="text" />
</td>
</tr>
</table> -->
<?php  
if(!(mysql_num_rows($result)>=1))
{
	echo '<p>';
	echo 'Sorry ! You cant see any informaton beacuse of privacy settings.';
	echo '</p>';
}
?>
</nav>
	<div class="middle_side2">
    <?php	
    include('eventpage.php');
	?>
      
</nav>
   </body>