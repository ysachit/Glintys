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
		if(isset($_POST['sub4']))
		{
			$mobile_no=$_POST['mobile_no'];
			$address=$_POST['address'];
						
		$mobile_no=mysql_real_escape_string($mobile_no);
		$address=mysql_real_escape_string($address);
		$u="update user_details set contact_no='$mobile_no',address='$address' where user_id='$userid'";
		$h=mysql_query($u);
		 if($h)
		 {
			 header('Location:../update_profile.php?success=4');
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