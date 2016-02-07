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
		if(isset($_POST['sub2']))
		{
			$desg=$_POST['desg'];
			$workplace=$_POST['workplace'];
			$college=$_POST['college'];
			$high=$_POST['high'];
			
		$desg=mysql_real_escape_string($desg);
		$workplace=mysql_real_escape_string($workplace);
		$college=mysql_real_escape_string($college);
		$high=mysql_real_escape_string($high);
		$u="update user_details set college='$college',highschool='$high' where user_id='$userid'";
		$f="update workplace set company='$workplace',designation='$desg' where user_id='$userid'";
         $g=mysql_query($u);
		 $h=mysql_query($f);
		 if($g && $h)
		 {
			 header('Location:../update_profile.php?success=2');
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