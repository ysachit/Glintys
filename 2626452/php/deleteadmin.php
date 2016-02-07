<?php
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
include("connect_user_database.php");
 $a=$_GET['id'];
$sql="DELETE FROM admin WHERE id='$a'";
$c=mysql_query($sql);
if($c)
{
    header('Location:../delete_admin.php');
    exit;
   
}
else{
    echo mysql_error();
}
?>