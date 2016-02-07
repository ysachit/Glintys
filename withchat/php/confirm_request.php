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
$aw="UPDATE friends SET status='1' WHERE(friend_two='$userid' AND friend_one='$member_id')";
$sw=mysql_query($aw);
if($sw)
{
	header('Location:../friend_profile1.php?id='.$member_id.'');
	}
							}
?>