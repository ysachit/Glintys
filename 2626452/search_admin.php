<?php
 include("header.php");
include("php/connect_user_database.php");
?>
<title>GlintYs :: Search User</title>
<p style="font-size:18px;" align="center">Searching Admin</p>
<br>
<hr>
<br>
<div align="center">
<form action="search_admin.php" name="search" method="post">
  Enter Username<input type="text"  name="txtsearch">
   <input type="submit" name="search" value="search">
     </form>
     </div>
<?php
  if(isset($_POST['search']))
    {
		$search=$_POST['txtsearch'];
		$a="select * from admin where username like '$search%'";
		$b=mysql_query($a);
		if(mysql_num_rows($b)==0)
			{?>
				<p style="font-size:16px; color:#F00" align="center"><b>Sir,there is no such Admin.</b></p>
                <?php
				}
			else
			{	?>
            
		   <table align="center" border=2>
           <?php	  
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
				  echo"</tr>";
				}  
			echo "</table>";
			}
	}
?>
