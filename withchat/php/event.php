<?php 
include('connect_database.php');
if(isset($_POST['event_submit']))
{
	$event_name = $_POST['event_name'];
	$onday = $_POST['onday'];
	$time_given = $_POST['time_given'];	
	$place = $_POST['place'];
	$people = $_POST['people'];
	$users_ip = $_SERVER['REMOTE_ADDR'];	
	$adi= mysql_query("insert into event(event_name,onday,place,people,users_ip,time_given)  VALUES('$event_name','$onday','$place','$people','$users_ip','$time_given')");	
	if($adi)
	{
		header('Location:../dashboard.php');
		}
		else
		{
			echo mysql_error();
			}
}

