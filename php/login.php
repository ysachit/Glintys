<?php
 // Connect database
  require('connect_database.php');
  include('checkauth.php');
      	
 if(isset($_POST['submit']))
	{
	 //Array to store validation errors
	 
		$errmsg_arr = array();	
		$errflag = false;
		function clean($str) {
			$str = @trim($str);
				if(get_magic_quotes_gpc()) {
				$str = stripslashes($str);
			}
		return mysql_real_escape_string($str);
		}
	
	    $a = $_POST['email'];
	    $b = md5($_POST['password']);
		$c=$_POST['mode'];
			
	//Input Validations
	   if($a == '' || $b == '') {
		   $errmsg_arr[] = 'Invalid Login ID AND Password entered';
		   $errflag = true;
	     }
	
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header('Location: ../index.php?try=f');
		exit();
	   }
				  $qry="select * FROM user_details WHERE email_id='$a' && password='$b' && approval = '1' ";
				  $Q=mysql_query($qry);
				  $data=mysql_fetch_array($Q); 
				  //Here we store the data in session 
		$_SESSION['userid']=$data['user_id'];	
		$_SESSION['fname']=$data['fname'];
		$_SESSION['lname']=$data['lname'];	  
		$_SESSION['full_name']=$data['fname']." ".$data['lname'];		
		$_SESSION['profile_pic']=$data['profile_pic'];
		$_SESSION['email_id']=$data['email_id'];
		if($data)
		{
			$add = $_SERVER['REMOTE_ADDR'];
            $date = date('Y-m-d H:i:s'); 
			$daf = mysql_query("INSERT into online_set(user_id,status,ip_address,entry_time) values('".$_SESSION['userid']."',1,'$add','$date')");
			}
  if($c=='Chat')
		{
		header('Location:../withchat/dashboard.php?id='.$_SESSION['userid'].'');
		}
  else
		{ 
		if($c=='Developer')
		{
			header('Location:../withdeveloper/dashboard.php');
		 }
		 else
		 {
			 if($c=='DChat')
			 {
				header('Location:../withDCHAT/dashboard.php'); 
				 }

		  }
	  }
	}
  	  else
	  {
		  header('Location: ../index.php?try=f');
		  }  
	if(!$data)
	{
		header('Location: ../index.php?try=f');
		}	  
	?>