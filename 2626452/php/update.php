<?php
session_start();
include("connect_admin_database.php"); 
	if(isset($_POST['submit']))
		{
			$userid =$_SESSION['userid']; 
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$username = $_POST['username'];
			$address = $_POST['address'];
			$phone = $_POST['mob'];
		if($fname = '' or $lname = '' or $username = '')
		{
			header('Location:../update_admin_profile.php');
			}	
		$da = mysql_query("Update admin SET fname='$fname',lname='$lname',email='$email',username='$username',address='$address',mobile_no='$phone' WHERE id='$userid'");
		if($da)
		{
			header('Location:../admin_profile.php?status=success');
			}	
			else mysql_error();
		}
?>