<?php
include('connect_database.php');
session_start();
if(isset($_POST['post']))
{
	$status=$_POST['dialoge'];
	$write_to= $_POST['friend_id'];
	$write_by=$_SESSION['userid'];
	$date=time();
	$status = mysql_real_escape_string($status);
	
	 $i="insert into 
	  writewall(writeby,write_to,content,time_on) values('$write_by','$write_to','$status',$date)";
	  $a=mysql_query($i);
	   if($a)
		   {
			   header('Location:../friend_profile1.php?id='.$write_to.'');    
           }  
}
?>