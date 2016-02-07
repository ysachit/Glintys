<?php
include('connect_database.php');
session_start();
if(isset($_POST['post']))
{
	$status=$_POST['dialoge'];	
	$b=$_FILES['abc']['name'];
	$poster=$_SESSION['fname'];
	$picture=$_SESSION['profile_pic'];
	$user=$_SESSION['userid'];
	$date=time();
	$sqc = $_POST['sqc'];
	$status = mysql_real_escape_string($status);
	
	 $i="insert into 
	  message(pic,dialoge,user,date_created,poster,picture,mode) values('$b','$status','$user','$date','$poster','$picture','$sqc')";
	  $a=mysql_query($i);
	   @move_uploaded_file($_FILES['abc']['tmp_name'],"../picupdate/$b");
	  if($a)
		   {
			   header('Location:../mainpage.php');    
           }  
}
?>