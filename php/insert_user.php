 <?php
 //Database Coonectivity
include("connect_database.php");
  if(isset($_POST['signup']))
  {
	  $email_id=$_POST['email'];
	  $password=$_POST['password'];
	  $rpassword=$_POST['rpassword'];
	  $insert_pass=md5($_POST['rpassword']);
	  // Input validation
	   if($email='' || $password='')
	   { 
		header("location: ../registration_user.php");
	   }
	   if($password!=$rpassword)
	    { 
		header("location: ../registration_user.php");
	   }
	   $i="insert into user_details(fname,lname,email_id,password,profile_pic,join_date) values('','','$email_id','$insert_pass','default_user.png',NOW())";
	  $a=mysql_query($i);
	     if($a)
		   {
			   echo 'done';
			   header("location:../registration_success.php");
			   }
			   else
			   {
				   echo mysql_error();
				   }      
           }  
  ?>