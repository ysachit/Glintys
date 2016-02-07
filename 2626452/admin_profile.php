<?php
include("header2.php");
?>
<title>Admin :: Update Profile</title>
<link href="css/layout.css" rel="stylesheet">
<body>
   <div>
   <h2 align="center"> Profile Update</h2>
   <?php 
   if((isset($_GET['status']) && $_GET['status']=='success'))
   {
	   echo "Changes Saved";
	   
	   }
   ?>
      <table align="center">
      <form action="php/update.php" method="post">
         <tr>
           <td>First Name</td>
           <td><input type="text" id="input" name="fname" pattern="[a-zA-Z ]{3,12}" required></td>
         </tr>
         <tr>
           <td>Last Name</td>
           <td><input type="text" id="input" name="lname" pattern="[a-zA-Z ]{3,12}" required></td>
         </tr>
         <tr>
           <td>Email</td>
           <td><input type="text" id="input" name="email" required></td>
         </tr>
         <tr>
           <td>Username</td>
           <td><input type="text" id="input" name="username" pattern="[a-zA-Z ]{5,12}" required></td>
         </tr>
         <tr>
           <td>Address</td>
           <td><textarea style="height:60px; width:250px;" name="address" pattern="[a-zA-Z0-9 ]{5,25}" required></textarea></td>
         </tr>
         <tr>
           <td>Phone No</td>
           <td><input type="text" id="input" name="mob" pattern="[0-9 ]{10}" required></td>
         </tr>
         <tr>
         <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
         </tr>
         </form>
           <tr>
         <td colspan="2" align="center"><a href="uploadimg_update.php">Upload Image</a></td>
         </tr>
         </table>
         </div>
         </body>
       </html>