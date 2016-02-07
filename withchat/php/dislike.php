<?php 
session_start();
include('connect_database.php');
if(isset($_POST['submit']))
{
			$messages_id = $_POST['com'];
			$likeby = $_POST['cam'];
			$sq1="delete from likeme WHERE like_post ='$messages_id' && likeby='$likeby'";
			$sq2=mysql_query($sq1);
if (!$sq2)
  {
   echo mysql_error();
  }
  else

{	
		header("location:../mainpage.php");
			
			 
}
}
			?>