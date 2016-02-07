<?php
include('php/connect_database.php');
?>
<?php
session_start();
if(!isset($_SESSION['userid']))
	    {
			header("Location:index.php");
			}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>DATABASE ANALYTICS</title>
    <link href="images/favicon.png" rel="icon" />
    <link href="css/dac.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>
    <script>
	</script>
</head>
<body>
<div class="detail">
  <p><img align="middle" src="images/profile_pic.jpg" /><a href="#"><?php echo $_SESSION['full_name']; ?></a></p>
  <p><a href="php/logout.php">Logout</p>
</div>
<div class="container">
     <div class="logo" align="center">
     <p><a href="#"><img src="images/logo.png" /></a></p>
     <h3>Data Analytics Center</h3>
     </div>
     <br />
     <hr width="500px;" />
     <br />
</div>	
<form action="#" method="post">
  <div class="pre">
      <div class="task">
         <p>Pre Task</p>
         <hr/>
    Selected Server : Localhost<br />
    Username of Database : root <br />
    Password of Database : ""<br />
    Selected Database : glintys
      </div>
  </div>
  <div class="perform">
  <p align="center">Perform task</p>
  <hr />
  Operation<select>
  <option>Insert</option>
  <option>Delete</option>
  <option>Update</option>
  <option>Select</option>
  </select>
  </div>

</form>
</body>
</html>