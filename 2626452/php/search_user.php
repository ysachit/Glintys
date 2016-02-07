<?php
include("connect_admin_database.php");
  if(isset($_POST['search']))
    {
		$search=$_POST['txtsearch'];
		$a="select * from admin where username like '$search%'";
		$b=mysql_query($a);
		echo"<table border=2>";	  
		   echo "<th>"."Admin ID"."</th>";
		   echo "<th>"."USERNAME"."</th>";
		   echo "<th>"."PASSWORD"."</th>";
		  while($c=mysql_fetch_array($b))
		    {
				echo "<tr>";
		// Crrated 
				echo "<td>";
				echo $c['admin_id'];
				echo "</td>";
				
				echo "<td>";
				echo $c['username'];
				echo "</td>";
				
				echo "<td>";
				echo $c['password'];
				echo "</td>";
				  echo"</tr>";
				}  
			echo "</table>";
		}
?>
<form action="search_user.php" name="search" method="post">
  <input type="text"  name="txtsearch">
   <input type="submit" name="search" value="search">
     </form>