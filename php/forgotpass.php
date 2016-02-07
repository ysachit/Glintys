<?php session_start();
include "connect_database.php";
if (isset($_POST['email'])){
	$email = $_POST['email'];
	$query="select * from user_details where email_id='$email'";
	$result   = mysql_query($query);
	$count=mysql_num_rows($result);
	if($count==1)
	{
		$rows=mysql_fetch_array($result);
		$pass  =  $rows['password'];
		$to = $rows['email_id'];
		$from = "GlintYs Pvt Ltd";
		$url = "www.glintys.com";
		$body  =  "Glintys password recovery Script
		-----------------------------------------------
		Url : $url;
		email Details is : $to;
		Here is your password  : $pass;
		Sincerely,
		Glintys";
		$from = "yaduvanshisachit@gmail.com";
		$subject = "Glintys Password recovered";
		$headers1 = "From: $from\n";
		$sentmail = mail ( $to, $subject, $body, $headers1 );
	} else {
	if ($_POST ['email'] != "") {
	echo"<span style='color: #ff0000;'> Not found in database.</span>";
		}
		}
if($sentmail==1)
	{
		header('Location:../successfmail.php');
	}
		else
		{
		if($_POST['email']!="")
		echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
	}
}
?>
