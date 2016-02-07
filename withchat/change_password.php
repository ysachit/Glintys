<?php
include('profile_show.php');
//include('eventpage.php');
include('online_friends.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Change Password</title>
    <link href="css/middle.css" rel="stylesheet" />
    <script src="js/jquery.min.js"></script>
    <script>
	function check()
	{
		if(firm.newpassword.value!=firm.newpass.value)
		{
			alert("New Password Should be same");
			return false();
						}
		}
	</script>
</head>
<body>
<div class="cbp-spmenu">
  <div class="cbp-spmenu-middle" align="center">
  <div class="change_password">
  <p>Change your Password</p>
  <form action="php/change_user_password.php" method="post" name="firm">
  <input type="password" name="prepassword" required="required" placeholder="Previous Password"/><br />
  <input type="password" name="newpassword" required="required" placeholder="New Password"/><br />
  <input type="password" name="newpass" required="required" placeholder="Retype New password" /><br />
  <input type="submit" name="submit" onclick="check()"/>
  </form>
  <div style="margin-top:30px; color:#F00">
   <?php if(isset($_GET['success']) && $_GET['success'] == true )
	   {
		   echo 'New Password Saved';
		   		   }
		if(isset($_GET['success']) && $_GET['success'] == 0 )
	   {
		   echo 'Previous Password is incorrect Or New password Does Not Match';
		   		   }		   
	    ?>
        </div>
  </div>
  </div>
  </div>
 </div> 
 ?>
	<div class="middle_side2">
    <?php	
    include('eventpage.php');
	?>
	
</body>
</html>