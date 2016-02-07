<?php
session_start();
include("connect_database.php");
 mysql_query("delete from preinfo WHERE user_id='".$_SESSION['userid']."'");
?>