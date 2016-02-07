	<?php
include('php/connect_database.php');
include('profile_show.php');
include('online_friends.php');
			?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/middle.css" rel="stylesheet" />
<title>Welcome : <?php echo $_SESSION['fname']; ?></title>
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script>
function checkFile(fieldObj)
    {
        var FileName  = fieldObj.value;
        var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
		var FileSize = fieldObj.size;
   
       if ( (FileExt != "jpg" && FileExt != "png" && FileExt != "jpeg" || FileSize > 2080000))
        {
            var error = "File type : "+ FileExt+"\n\n";
            error += "Please dont upload PNG file or Invalid File \n File Size Should not be grater then 1.5MB";
            alert(error);
			$("#clickme").hide();
            return false;
        }
		$("#clickme").show();
        return true;
    }
		</script>
        <style>
		.left
		{
			margin-left:10px;
			}
		</style>
<script>
/*$(document).ready(function(){
  
 $('.status').focus(function(){
   
  $('.status').addClass('statusfocus');
  $('.postbar').show();
   
 });  
});*/
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
    <form action="php/post.php" method="post" name="statusform" enctype="multipart/form-data">
 <textarea name="dialoge" class="status" id="status" required="required" placeholder="What's on your mind?" title="What's on your mind?"></textarea>
    <div id="postbar" class="postbar">
    <input type="file" name="abc" value="Upload Pic" onchange="checkFile(this)"/>
    <select id="sqc" name="sqc">
    <option value="0">Public</option>
    <option value="1">Friends</option>
    <option value="2">Only Me</option>
    </select>
    <input name="post" type="submit" value="Post" id="clickme" onclick="form_validate()" class="postbtn" />
     </div>
   </form>
   <br /><br />

  <?php 
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE user='".$_SESSION['userid']."' ORDER BY messages_id DESC";
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
	$days = floor($row['date_created'] / (60 * 60 * 24));
			$remainder = $row['date_created'] % (60 * 60 * 24);
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
	echo "<div class='post1'>{$row['dialoge']}";
	echo '<br/>';
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
	echo '<input type="submit" Value="Unlike" id="like" name="submit">';
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
	echo '<form action="php/dislike.php" method="post">'; 
	echo '<input type="hidden" name="com" value="'. $row['messages_id'] .'">';
	echo '<input type="hidden" name="cam" value="'. $_SESSION['userid'] .'">';
	echo '<input type="submit" Value="unlike" id="like" name="submit">';
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
  echo '<font color="blue"><b>' . $numberoflikes .'</b></font>' .' '.'people'  .' '. 'like this';
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
	/*echo '<a href=php/deletepost.php?id=' . $row["messages_id"] . '>' . "Delete" . '</a>';*/
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
	
$query1  = "SELECT *,UNIX_TIMESTAMP()- date_created AS date_created FROM post_comment WHERE id=" . $row['messages_id']." ORDER BY comment_id DESC LIMIT 4";
	$result1 = mysql_query($query1);
	while($row1 = mysql_fetch_assoc($result1))
	{
		echo '<table class="left">';
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
						$days2 = floor($row1['date_created']/(24 * 60 * 60));
						$remainder = $row1['date_created'] % (60 * 60 * 24);
						$hours = floor($remainder / (24 * 60 * 60));
						$remainder = $remainder % (60 * 60);
						$minutes = floor($remainder / 60);
						$remainder = $remainder % (60);
						$seconds = $remainder;	
						if($days2 > 0)	
							echo $days2.' days ago';
						elseif($hours == 0 && $minutes == 0)
							echo "few seconds ago";		
						elseif($hours == 0)
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
	//include('commentpage.php');
	echo '<div class="comments clearfix left">';
				echo '<div class="pull-left lh-fix">';
					echo "<img src="."images/".$_SESSION['profile_pic'].">";
				echo '</div>';
				
			 echo '<div class="comment-text pull-left">';
            echo '<form action="php/comment_me.php" method="post" enctype="multipart/form-data">';
			echo '<input type="hidden" value='.$_SESSION['profile_pic'].' name="profile_pic" />';
            echo '<input type="hidden" value="'.$_SESSION['fname'].'" name="commented_by" />';	
            echo '<input type="hidden" value="'.$userid.'" name="commenter_id" />';
            echo '<input type="hidden" value='.$row['messages_id'].' name="message_id">'; 
   echo '<textarea style="overflow:auto" class="text-holder" placeholder="Write a comment.." id="message" name="content"></textarea>';
			echo '<input type="submit" name="comment" id="comment_me" value="comment">';
            echo '</form>';
		  echo '</div>';
			echo '</div>';
		  echo '<br>';
		  echo '<hr>';
		  echo '<br>';
 }
?>&nbsp; 
<?php  
if(!(mysql_num_rows($result)>=1))
{
	echo '<p>';
	echo 'You does have any post to show.Please update your first status.';
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