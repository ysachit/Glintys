<?php 
session_start();
include("connect_database.php");
				  if (isset($_GET['id']))
	{
			 
			$messages_id = $_GET['id'];
			//$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");
			$cd=mysql_query("DELETE FROM post_comment WHERE comment_id='$messages_id'");
			if($cd)
			{
			header("location: ../dashboard.php");
			}
			}
			?>