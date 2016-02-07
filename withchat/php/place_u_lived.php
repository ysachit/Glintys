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
		if(isset($_POST['sub3']))
		{
			$currentplace=$_POST['currentplace'];
			$birthplace=$_POST['birthplace'];
			//$dreamplace=$_POST['dreamplace'];
			
		$currentplace=mysql_real_escape_string($currentplace);
		$birthplace=mysql_real_escape_string($birthplace);
		//$dreamplace=mysql_real_escape_string($dreamplace);
		$u="update user_details set current_city='$currentplace',hometown='$birthplace' where user_id='$userid'";
		$h=mysql_query($u);
		 if($h)
		 {
			 header('Location:../update_profile.php?success=3');
			 }
		//if($desg = NULL)
//		{
//			$u="update user_details set workplace='$workplace',status='$status',$relationship_status='$relstatus' where user_id='$userid'";
//            $g=mysql_query($u);
//		}
//		elseif($workplace = NULL)
//		{
//				$u="update user_details set desg='$desg',status='$status',relationship_status='$relstatus' where user_id='$userid'";
//				$g=mysql_query($u);
//		}
//		elseif($status = NULL)
//		{
//		$u="update user_details set desg='$desg',workplace='$workplace' relationship_status='$relstatus' where user_id='$userid'";
//				$g=mysql_query($u);
//	}
//	elseif($relstatus = NULL)
//		{
//		$u="update user_details set desg='$desg',workplace='$workplace',status='$status' where user_id='$userid'";
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