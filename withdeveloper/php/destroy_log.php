<?php
include('connect_database.php');
session_start();
$ops = mysql_query("delete from online_set WHERE user_id='".$_SESSION['userid']."'");
$das = mysql_query("delete from file_saved WHERE user_id='".$_SESSION['userid']."'");
?>