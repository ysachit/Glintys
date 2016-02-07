<?php
include('connect_database.php');
 session_start();
     //If session has no userid saved
	 //Redirect
	   //GET DATA ACCORDING TO ID FOR UPDATE
if(isset($_POST['new_name'])){
    $id = $_SESSION['userid'];
    $Q = mysql_query('SELECT * FROM user_details where id ='.$id.' LIMIT 1');
    $data = mysql_fetch_array($Q);	
	$qry = "UPDATE user_details SET fname='".$_POST['fname']."' , lname ='".$_POST['lname']."' WHERE id=".$id." ";
    $Q =mysql_query($qry);
    if($Q){
        header('Location:../dashboard.php');
        exit;
    }
}
?>