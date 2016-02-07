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
<div class="cont">
     <div class="logo" align="center">
     <p><a href="#"><img src="images/logo.png" /></a></p>
     <h3>Data Analytics Center</h3>
     </div>
     <br />
     <hr width="500px;" />
     <br />
</div>	
<form action="php/selectdatabase.php" method="post">
<div align="center" class="main">
       <p>Pre Task</p>
         <hr width="350px;"/>
    <select name="server">
    <option value=" ">Select Server</option>
    <option value="localhost">Localhost</option>
    </select><br />
    <input type="text" name="user" placeholder="Username of Database" /><br />
    <input type="password" name="pass" placeholder="Password of Database" /><br />
    <select name="database">
    <option value=" ">Select Database</option>
    <option value="glintys">glintys</option>
    <option value="workarea">workarea</option>
    </select><br />
    <input type="submit" name="submit" value="Enter" />
      </div>
</form>
</body>
</html>