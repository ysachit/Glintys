<?php
   //Connect database
      include("php/connect_user_database.php");
	  include("header.php");
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
				  echo"</tr>";
				}  
			echo "</table>";	   
  ?>
  <p align="center">LEGENDS</p>
    <p align="center">Right = 0   ( SUPER USER )</p>
    <p align="center">Right = 1   ( ADMIN )</p>
      
  