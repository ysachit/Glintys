<?php
include('connect_database.php');
 session_start();
     //If session has no userid saved
	 //Redirect
	   //GET DATA ACCORDING TO ID FOR UPDATE
if(isset($_POST['submit'])){
    $id = $_SESSION['userid'];
	$old = md5($_POST['prepassword']);
	$new = md5($_POST['newpassword']);
	$newagain = md5($_POST['newpass']);
	if($new!==$newagain)
	{
		header('Location:../change_password.php');
		}
	else
	{	
    $qry = "UPDATE user_details SET password='$new' WHERE(user_id=".$id." && password =".$old.")";
    $Q =mysql_query($qry);
    if($Q)
	{
        header('Location:../change_password.php?success=true');
        exit;
   }
   else 
   {
	   header('Location:../change_password.php?success=0');
	   }
  }
}
?>