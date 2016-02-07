<?php
include("php/connect_admin_database.php");
require("header2.php");
?>
<title>Admin :: Reset Password</title>
<link href="css/layout.css" rel="stylesheet">
<body>
   <div align="center">
    <h3>Change Your Password</h3>
    <?php
	 if((isset($_GET['status']) && $_GET['status']=='success'))
   {
	   echo "Changes Saved";
	   
	   }
	?>
      <table align="center">
         <form action="php/update_password.php" method="post">
         <tr>
       <td>Old Password</td>
       <td><input type="password" name="opass" id="input"></td>
       </tr>
       <tr>
       <td>New Password</td>
       <td><input type="password" name="npass" id="input"></td>
       </tr>
       <tr>
       <td>Retype New Password</td>
       <td><input type="password" name="rpass" id="input"></td>
       </tr>
       <tr>
       <td colspan="2" align="center"><input type="submit" name="submit"></td>
       </tr>       
       </form>
       </table>
       </div>
       </body>
       