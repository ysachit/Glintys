<?php
session_start();
include('connect_database.php');
if(isset($_GET['id']))
{
	$ide=$_GET['id'];
	$adc = mysql_query("update user_details SET approval='0' WHERE user_id=".$ide."");
	if($adc)
	{
		header('Location:../block_user.php');
		} 
	}
?>