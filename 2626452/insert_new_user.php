 <?php
 include("header.php");
  ?>
<title>GlintYs :: Insert New Admin</title>
<link href="css/layout.css" rel="stylesheet">
<div align="center">
<p style="font-size:24px;"> Inserting New Admin</p>
<hr>
	<table>
 <form action="php/insert_admin.php" method="post">
   <tr>
   <td>First Name</td>
   <td><input type="text" name="fname" id="input" required></td>
   </tr>
   <tr>
   <td>Last Name</td>
   <td><input type="text" name="lname" id="input" required></td>
   </tr>
   <tr>
   <td>Email</td>
   <td><input type="email" name="email" id="input" required></td>
   </tr>
   <tr>
   <td>Username</td>
   <td><input type="text" name="username" id="input" required></td>
   </tr>
   <tr>
   <td>Password</td>
   <td><input type="password" name="password" id="input" required></td>
   </tr>
   <tr>
   <td>Mobile No</td>
   <td><input type="tel" name="mob" id="input" required></td>
   </tr>
   <tr>
   <td colspan="2" align="center"><input type="submit" name="submit" value="Submit" id="submit"></td>
   </tr>
   </form>
      </table>
      </div>
	  