 <?php
 //Database Coonectivity
include("connect_database.php");
  if(isset($_POST['signup']) &&
    isset($_FILES['abc']['name']))
  {
	  $fname=$_POST['fname'];
	  $lname=$_POST['lname'];
	  $email=$_POST['email'];
	  $username=$_POST['username'];
	  $password=md5($_POST['pass']);
	  $mob=$_POST['mob'];
	  $b=$_FILES['abc']['name'];
	  
$i="insert into user_details(fname,lname,email_id,username,password,mobile_no,profile_img) values('$fname','$lname','$email','$username','$password','$mob','$b')";
	  $a=mysql_query($i);
	   @move_uploaded_file($_FILES['abc']['tmp_name'],"../images/$b");
	  if($a)
		   {
			   echo 'done';
			   header("location:../index.php");
			   }
			   else
			   {
				   echo mysql_error();
				   }      
           }  
  ?>