	<?php
include('connect_database.php');
session_start();
if($_POST)
{
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 
	
	if(isset($_POST["message"]) &&  strlen($_POST["message"])>0)
	{
	    $user1 = filter_var(trim($_POST["user01"]));
		$user2 = filter_var(trim($_POST["user02"]));
		global $user1,$user2;
		$message = filter_var(trim($_POST["message"]),FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
		$user_ip = $_SERVER['REMOTE_ADDR'];
		

		if(mysql_query("INSERT INTO chat_me(user1,user2,message,ip_add) value('$user1','$user2','$message','$user_ip')"))
		{
			$msg_time = date('h:i A M d',time()); // current time
	echo '<div class="chat_msg"><time>'.$msg_time.'</time><span class="username">'.$user1.'</span><span class="message">'.$message.'</span></div>';
		}
		
	}
	elseif($_POST["fetch"]==1)
	{
		if(isset($_GET['id']))
		{
		$userid = $_SESSION['userid'];
$results = mysql_query("SELECT * FROM chat_me WHERE((user1 = $userid or user2 = $userid) && (user1 =".$_GET['id']." or user2 =".$_GET['id']." ))");
//$update_table = mysql_query("Update chat_me set read_mode ='1' WHERE((user1 = $userid or user2 = $userid) && (user1 =".$_GET['id']." or user2 =".$_GET['id']." )) ");
		while($row = mysql_fetch_array($results))
		{
			$bd = mysql_query("SELECT fname from user_details WHERE user_id=".$row['user1']." ");
			$cd = mysql_fetch_array($bd);
			$time = date('h:i A M d',strtotime($row["time_send"]));
			echo '<div class="chat_msg"><time>'.$time.'</time><span class="username">'.$cd["fname"].'</span> <span class="message">'.$row["message"].'</span></div>';
		}
	  }
	}
	else
	{
		header('HTTP/1.1 500 U r looking for wrong path');
    	exit();
	}
}
//WHERE((user1 = $userid or user2 = $userid) && (user1 =".$_GET['id']." or user2 =".$_GET['id']." ))
?>