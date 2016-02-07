<?php
session_start();
include('connect_database.php');
 if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
	$userid=$_SESSION['userid'];	
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$status=$_POST['status'];
	$college=$_POST['college'];
	$sques=$_POST['sques'];
	$squesans=$_POST['squesans'];
	$op = mysql_query("UPDATE user_details SET fname='$fname',lname='$lname',status='$status',college='$college',security_ques='$sques',squesans='$squesans' WHERE user_id=$userid ");
	
	if($op)
	{
		header('Location:../success.php');
		}
	else
	{
		header('Location:../failure.php');
		}	
	}

?>