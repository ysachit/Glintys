<?php
include('connect_admin_database.php');
  if(isset($_POST['sub']) &&
    isset($_FILES['abc']['name']))
	  {
		$a=$_FILES['abc']['name'];
		$b=$_SESSION['userid'];
		$query="UPDATE admin SET profile_img='$a' WHERE id='$b'";
		$q=mysql_query($query);		
		$path="../images/$a" ;
@move_uploaded_file($_FILES['abc']['tmp_name'],$path); 
		  }  
?> 
<form action="" method="post" enctype="multipart/form-data">
   Upload Image<input type="file" name="abc"><br>
   <input type="submit" value="save" name="sub">
   </form> 