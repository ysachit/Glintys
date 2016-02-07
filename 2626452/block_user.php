<?php
 include("header.php");
include("php/connect_user_database.php");
  if(isset($_POST['search']))
    {
		$search=$_POST['txtsearch'];
		$a="select * from user_details where(fname like '$search%' || lname like '$search%')";
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
				echo $c['user_id'];
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
				echo $c['password'];
				echo "</td>";
				
				echo "<td>";
				echo $c['contact_no'];
				echo "</td>";
				
				echo "<td style='font-size:10px;'>";
				echo '<a href="php/blockuser.php?id='.$c['user_id'].'">'."Block"."</a>";
				echo "</td>";	
				
				  echo"</tr>";
				}  
			echo "</table>";
	}
?>
<title>GlintYs :: Block User</title>
<p align="center" style="font-size:16px;">Blocking User</p>
<hr>
<br>	
<div align="center">
<form action="block_user.php" name="search" method="post">
  Enter Username<input type="text"  name="txtsearch">
    <input type="submit" name="search" value="search">
     </form>
    <hr>
<?php
	 $a="select *  from user_details";
	    $b=mysql_query($a);
	// To print the table 	
	?>
    <p style="font-size:18px;" align="center">All User</p>
    <br>
    <?php	
	    echo"<table border=2 align='center'>";	  
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
				if($c['approval']=='1')
				{
				echo "<td style='font-size:10px;'>";
				echo '<a href="php/blockuser.php?id='.$c['user_id'].'">'."Block"."</a>";
				echo "</td>";	
				}
				else
				{
				echo "<td style='font-size:10px;'>";
				echo '<a href="php/unblockuser.php?id='.$c['user_id'].'">'."Unblock"."</a>";
				echo "</td>";
					}
								
				echo '</tr>'; 
				}
			  
			echo "</table>";	   
  ?>
      
  