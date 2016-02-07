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
		if(isset($_POST['sub1']))
		{
			$fname=$_POST['fname'];
			$lname=$_POST['lname'];
			$status=$_POST['status'];
			$relstatus=$_POST['relstatus'];
			
		$fname=mysql_real_escape_string($fname);
		$lname=mysql_real_escape_string($lname);
		$status=mysql_real_escape_string($status);
		$relstatus=mysql_real_escape_string($relstatus);
		$u="update user_details set fname='$fname',lname='$lname',status='$status',relationship_status='$relstatus' where user_id='$userid'";
         $g=mysql_query($u);
		 if($g)
		 {
			 header('Location:../update_profile.php?success=1');
			 }
		//if($fname = NULL)
//		{
//			$u="update user_details set lname='$lname',status='$status',$relationship_status='$relstatus' where user_id='$userid'";
//            $g=mysql_query($u);
//		}
//		elseif($lname = NULL)
//		{
//				$u="update user_details set fname='$fname',status='$status',relationship_status='$relstatus' where user_id='$userid'";
//				$g=mysql_query($u);
//		}
//		elseif($status = NULL)
//		{
//		$u="update user_details set fname='$fname',lname='$lname' relationship_status='$relstatus' where user_id='$userid'";
//				$g=mysql_query($u);
//	}
//	elseif($relstatus = NULL)
//		{
//		$u="update user_details set fname='$fname',lname='$lname',status='$status' where user_id='$userid'";
//				$g=mysql_query($u);
//		}
//		if($g)
//		{
//			header('Location:../update_profile.php');
//			}
//		else
//		{
//			header('Location:../update_profile.php');
//			
//			}	
}		
?>