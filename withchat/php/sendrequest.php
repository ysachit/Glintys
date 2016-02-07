<?php
include('connect_database.php');
session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
		$userid=$_SESSION['userid'];
		if (isset($_GET['id']))
							{
						$member_id = $_GET['id'];
		$aq= mysql_query("INSERT INTO friends(friend_one,friend_two) values('$userid','$member_id')");
		if($aq)
		{
			//echo "Success";
			header('Location:../friend_profile1.php?id='.$member_id.'');
			}
		}

?>