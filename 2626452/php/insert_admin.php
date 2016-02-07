 <?php
 //Database Coonectivity
include("connect_admin_database.php");
  if(isset($_POST['submit']))
  {
	  $fname=$_POST['fname'];
	  $lname=$_POST['lname'];
	  $email=$_POST['email'];
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  $mob=$_POST['mob'];
	  
	  $i="insert into 
	  admin(fname,lname,email,username,password,mobile_no) values('$fname','$lname','$email','$username','$password','$mob')";
	  $a=mysql_query($i);
	   	  if($a)
		   {
			   echo 'done';
			   header("location:../dashboard.php");
			   }
			   else
			   {
				   echo mysql_error();
				   }      
           }  
  ?>