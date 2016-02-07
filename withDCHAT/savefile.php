<?php
//include('connect_database.php');
session_start();
if(isset($_POST['submit']))
{
	$ads = $_POST['program'];
	$content = addslashes($ads);
	echo $content;
}
?>