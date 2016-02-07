<?php
include("connect_database.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['user_id']);
$firstname=mysql_escape_String($_POST['firstname']);
$lastname=mysql_escape_String($_POST['lastname']);
$sql = "update user_details set fname='$firstname',lname='$lastname' where user_id='$id'";
mysql_query($sql);
}
?>