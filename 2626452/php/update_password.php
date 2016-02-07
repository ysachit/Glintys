<?php
include("connect_admin_database.php");
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:./index.php");
			}
$d=$_SESSION['userid'];
    if(isset($_POST['submit']))
	{
		$old_pass=$_POST['opass'];
		$new_pass=$_POST['npass'];
		$b="UPDATE admin SET password='$new_pass' where((id='$d') && (password='$old_pass'))";
		$c=mysql_query($b);
		if($c)
		 {
			 header("Location:../change_password.php?status=success");
			 }
			 else
			 {
				 echo mysql_error();
				 }
		}
?>