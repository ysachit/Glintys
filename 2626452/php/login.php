<?php
 // Connect database
  require('connect_admin_database.php');
    //START SESSION ON PAGE LOAD
	 // IT CREATES A SESSION ID ON THE SERVER AND SEND IT TO BEROWSER IN COOKIES
	 session_start();
	    //IF USER SESSION EXITS SEND TO WELCOME PAGE (USER ALREADY LOGEGD IN)
		 if(isset($_SESSION['userid']))
		   {
			   header('Location:../dashboard.php');
			   }	
			  if(isset($_POST['signin']))
			  {
				  $a=$_POST['username'];
				  $b=$_POST['password'];
				  $qry="select * FROM admin WHERE username='$a' && password='$b'";
				  $Q=mysql_query($qry);
				  $data=mysql_fetch_array($Q); 
				  //Here we store the data in session 
		$_SESSION['userid']=$data['id'];		  
		$_SESSION['full_name']=$data['fname']." ".$data['lname'];
		$_SESSION['profile_img']=$data['profile_img'];
		$_SESSION['post']=$data['post'];
		if($data['rights'] == '0')
		{
		header('Location:../dashboard.php');
		}
		else
		{
			header('Location:../dashboardother.php');
			}
		
	  } 
?>