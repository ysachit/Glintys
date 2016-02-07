<?php
session_start();
include('connect_database.php');
if(isset($_POST['filesubmit']) && isset($_FILES['abc']['name']))
{
	$file = $_FILES['abc']['name'];	
	$r = $_SESSION['userid'];
	$u="insert into file_saved (user_id,folder_name,file_name) values('$r','$r','$file')";
            $g=mysql_query($u);
			if($g)
			{
			if (!file_exists('../file_saved/$r')) {
             mkdir('../file_saved/'.$r.'', 0777, true);
			 }	
			@move_uploaded_file($_FILES['abc']['tmp_name'],"../file_saved/".$r."/$file");
			if($g)
			{
				header('Location:../work_area.php');
			 }
		 }
	}
?>