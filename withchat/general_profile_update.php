<?php
include("profile_show.php");
?>
<link href="css/layout.css" rel="stylesheet">
<script src="js/jquery-1.9.0.min.js"></script>
<script>
   function show_name()
{
	$("#new_name").show();
	}
function show_password()
{
	$("#new_password").show();
	}
function show_email()
{
	$("#new_email").show();
	}		
</script>
<body>
<div class="cbp-spmenu-middle">
  <div class="middle_side1">
   <h2>Profile Settings :</h2>
   <table align="center" class="update_profile">
   <tr>
   <td>
   <p>Name&nbsp;&nbsp;:&nbsp;<b><?php 
   $w=mysql_query("Select * from user_details where user_id='$userid'");
   $d=mysql_fetch_array($w);
   echo $d['fname']." ".$d['lname'];
    ?></b></p>
   </td>
   <td onClick="show_name()">Edit</td>
   </tr>
   <tr align="center" id="new_name">
   <td colspan="2">
   <form action="php/basic_details_update.php" method="post">
   <p>First Name&nbsp;&nbsp;:&nbsp;<input type="text" name="fname" value="<?php echo $d['fname']; ?>"></p>
   <p>Last Name&nbsp;&nbsp;:&nbsp;<input type="text" name="lname" value="<?php echo $d['lname']; ?>"></p>
   <p><input type="submit" name="new_name"></p>
   </form>
   </td>
   </tr>   
    <tr>
   <td>
   <p>Email&nbsp;&nbsp;:&nbsp;<?php echo $d['email_id']; ?></p>
   </td>
   <td onClick="show_email()">Can't be changed</td>
   </tr>
       
   <tr>
   <td>
   <p>Password&nbsp;&nbsp;:******&nbsp;</p>
   </td>
   <td onClick="show_password()">Edit</td>
   </tr>
   
   <tr align="center" id="new_password">
   <td colspan="2">
   <form action="php/change_user_password.php" method="post">
   <p>Old Password&nbsp;&nbsp;:&nbsp;<input type="password" name="oldpass"></p>
   <p>New Password&nbsp;&nbsp;:&nbsp;<input type="password" name="newpassword"></p>   
   <p>New Password&nbsp;&nbsp;:&nbsp;<input type="password" name="rnewpassword"></p>
   <p><input type="submit" name="new_password"></p>
   </form>
   </td>
   </tr>
   
  </table>
</div>
</body>