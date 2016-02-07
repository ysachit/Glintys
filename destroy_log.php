<?php
include('php/connect_database.php');
session_start();
$ops = mysql_query("update online_set SET status =0,ip_address=00,entry_time=0 WHERE user_id='".$_SESSION['userid']."'");
?>