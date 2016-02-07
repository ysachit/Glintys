<?php
   //Connect database
      include("php/connect_user_database.php");
	  include("header.php");
	//Fetch data from the database 
	 $a="select *  from user_details";
	    $b=mysql_query($a);
	// To print the table 	
	?>
    <p align="center">All User</p>
    <hr>
    <br>
    <?php	
	    echo"<table border=1 align='center'>";	  
		   echo "<th>"."ID"."</th>";
		   echo "<th>"."First Name"."</th>";
		   echo "<th>"."Last Name"."</th>";
		   echo "<th>"."EMAIL"."</th>";
		   echo "<th>"."Address"."</th>";
		   echo "<th>"."Join Date"."</th>";
		   echo "<th>"."Current"."</th>";
		   echo "<th>"."RIGHTs"."</th>";
		  while($c=mysql_fetch_array($b))
		    {
				echo "<tr>";
				
				echo "<td style='font-size:10px;'>";
				echo $c['user_id'];
				echo "</td>";
				
				echo "<td style='font-size:10px;'>";
				echo $c['fname'];
				echo "</td>";
				
				echo "<td style='font-size:10px;'>";
				echo $c['lname'];
				echo "</td>";
				
				echo "<td style='font-size:10px;'>";
				echo $c['email_id'];
				echo "</td>";
				  
				  echo "<td style='font-size:10px;'>";
				echo $c['address'];
				echo "</td>";
				  
				  echo "<td style='font-size:10px;'>";
				echo $c['join_date'];
				echo "</td>";
				
				echo "<td style='font-size:10px;'>";
				echo $c['current_city'];
				echo "</td>";
				  
				echo "<td style='font-size:10px;'>";
			 if($c['approval']=='1')
			 {
			    echo 'Approved User';
			 }else
			 {
				 echo 'Bloacked User';
				 }
				echo "</td>";
				  echo"</tr>";
				}  
			echo "</table>";	   
  ?>    
  