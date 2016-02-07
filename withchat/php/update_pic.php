<?php
include('connect_database.php');
session_start();
$userid = $_SESSION['userid'];
if(isset($_POST['submit']) &&
    isset($_FILES['abc']['name']))
    {
	 $b = $_FILES['abc']['name'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["abc"]["name"]);
$extension = end($temp);
if ((($_FILES["abc"]["type"] == "image/gif")
|| ($_FILES["abc"]["type"] == "image/jpeg")
|| ($_FILES["abc"]["type"] == "image/jpg")
|| ($_FILES["abc"]["type"] == "image/pjpeg")
|| ($_FILES["abc"]["type"] == "image/x-png")
|| ($_FILES["abc"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
 {
  if ($_FILES["abc"]["error"] > 0) 
  {
    echo 'Error in uploading';
	header('Location:../profile_pic.php');
  } else
    { 	
$u="update user_details set profile_pic='$b' WHERE user_id='$userid'";
            $g=mysql_query($u);
			if($g)
			{
			@move_uploaded_file($_FILES['abc']['tmp_name'],"../images/$b");
			if($g)
			{
				header('Location:../dashboard.php');
			 }
		 }
	}
}
	else 
	{
		 echo 'Error in uploading';
	     header('Location:../profile_pic.php');
		}
}
		?>	