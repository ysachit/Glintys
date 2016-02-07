<?php
include('connect_database.php');
if(isset($_POST['comment']))
{
	$profile_pic = $_POST['profile_pic'];
	$commented_by = $_POST['commented_by'];
	$commenter_id = $_POST['commenter_id'];
	$message_id = $_POST['message_id'];
	$cont = $_POST['content'];
	$date=time();
 $content = mysql_real_escape_string($cont);
 $qu = mysql_query("INSERT INTO post_comment(content,commented_by,commenter_id,pic,id,date_created) VALUES('$content','$commented_by','$commenter_id','$profile_pic','$message_id','$date')");
 if($qu)
 {
	 header('Location:../dashboard.php?status=commented');
	 }
	}
?>