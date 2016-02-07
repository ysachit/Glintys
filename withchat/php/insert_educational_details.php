<?php
include('connect_database.php');
 session_start();
     //If session has no userid saved
	 //Redirect
	   //GET DATA ACCORDING TO ID FOR UPDATE
if(isset($_POST['userid'])){
    $id = $_POST['userid'];
    $Q = mysql_query('SELECT * FROM user_details where id ='.$id.' LIMIT 1');
    $data = mysql_fetch_array($Q);
   
}
if(isset($_POST['update']))
{
	$id = $_SESSION['userid'];
	$qry = "UPDATE user_details SET study_in='".$_POST['new_study']."' , high_school ='".$_POST['high_school']."' WHERE id=".$id." ";
               
       
    $Q =    mysql_query($qry);
    if($Q){
        header('Location:../dashboard.php');
        exit;
    }
}
?>