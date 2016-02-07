<?php
 include("header.php");
include("php/connect_user_database.php");
  if(isset($_POST['search']))
    {
		$search=$_POST['txtsearch'];
		$a="select * from admin where username like '$search%'";
		$b=mysql_query($a);
		echo"<table border=2>";	  
		   echo "<th>"."ID"."</th>";
		   echo "<th>"."FIRST NAME"."</th>";
		   echo "<th>"."LAST NAME"."</th>";
		   echo "<th>"."EMAIL"."</th>";
		   echo "<th>"."USERNAME"."</th>";
		   echo "<th>"."PASSWORD"."</th>";
		   echo "<th>"."MOBILE NO"."</th>";
		  while($c=mysql_fetch_array($b))
		    {	echo "<tr>";
				
				echo "<td>";
				echo $c['id'];
				echo "</td>";
				
				echo "<td>";
				echo $c['fname'];
				echo "</td>";
				
				echo "<td>";
				echo $c['lname'];
				echo "</td>";
				
				echo "<td>";
				echo $c['email_id'];
				echo "</td>";
				  
				  echo "<td>";
				echo $c['username'];
				echo "</td>";
				  
				  echo "<td>";
				echo $c['password'];
				echo "</td>";
				
				echo "<td>";
				echo $c['mobile_no'];
				echo "</td>";
				
				  echo"</tr>";
				}  
			echo "</table>";
	}
?>
<title>GlintYs :: Search User</title>
<p align="center" style="font-size:16px;">Deletion of Admin</p>
<hr>
<br>	
<div align="center">
<form action="search_user.php" name="search" method="post">
  Enter Username<input type="text"  name="txtsearch">
    <input type="submit" name="search" value="search">
     </form>
<br>
<hr>
<br>
<?php
	//Fetch data from the database 
	 $a="select *  from admin";
	    $b=mysql_query($a);
	// To print the table 	
	?>
    <p style="font-size:18px;" align="center">All ADMIN</p>
    <hr>
    <br>
    <?php	
	    echo"<table border=2 align='center'>";	  
		   echo "<th>"."ID"."</th>";
		   echo "<th>"."FIRST NAME"."</th>";
		   echo "<th>"."LAST NAME"."</th>";
		   echo "<th>"."EMAIL"."</th>";
		   echo "<th>"."USERNAME"."</th>";
		   echo "<th>"."PASSWORD"."</th>";
		   echo "<th>"."MOBILE NO"."</th>";
		   echo "<th>"."RIGHTs"."</th>";
		    echo "<th>"."Action"."</th>";
		  while($c=mysql_fetch_array($b))
		    {
				echo "<tr>";
				
				echo "<td>";
				echo $c['id'];
				echo "</td>";
				
				echo "<td>";
				echo $c['fname'];
				echo "</td>";
				
				echo "<td>";
				echo $c['lname'];
				echo "</td>";
				
				echo "<td>";
				echo $c['email'];
				echo "</td>";
				  
				  echo "<td>";
				echo $c['username'];
				echo "</td>";
				  
				  echo "<td>";
				echo $c['password'];
				echo "</td>";
				
				echo "<td>";
				echo $c['mobile_no'];
				echo "</td>";
				  
				echo "<td>";
				echo $c['rights'];
				echo "</td>";
				if($c['rights'] !=='0')
				{
				echo "<td>";
				echo '<a href="php/deleteadmin.php?id="'.$c['id'].'">Delete</a>';
				echo "</td>";
				  echo"</tr>";
				}
				}  
			echo "</table>";	   
  ?>
  <p align="center">LEGENDS</p>
    <p align="center">Right = 0   ( SUPER USER )</p>
    <p align="center">Right = 1   ( ADMIN )</p>
      
  
