<?php
include('connect_database.php');
session_start();
if(!isset($_SESSION['userid']))
{
	header('Location:../index.php');
	}
	
if(isset($_POST['submit']))
	{
		$user_id = $_SESSION['userid'];
		$server1 = $_POST['server'];
		$username = $_POST['user'];
		$password = $_POST['pass'];
		$database = $_POST['database']; 
//		echo $user_id;
//		echo $server1;
//		echo $username;
//		echo $password;
//		echo $database;
$abc = mysql_query("insert into preinfo(user_id,server,username,password,database_selected) values('$user_id','$server1','$username','$password','$database')");
if($abc)
{
	header('Location:../dacmain.php?id='.$user_id.'');
	}
		}
?>