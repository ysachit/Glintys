<?php
include("profile_show.php")
?>
<link href="css/layout.css" rel="stylesheet">
<script src="js/jquery-1.9.0.min.js"></script>
<script>
   function showEducationalEdit()
  {
	$("#showEducationalEdit").show();
	}		
</script>
<div class="glintys">
   <p>Advance Profile Settings :</p>
   <table align="center" class="update_profile">
   <th>Educational Details</th>
   <tr>
   <td>Study In &nbsp;&nbsp;:&nbsp;</td><td><?php 
		$clg=mysql_query("SELECT * From user_details WHERE user_id='$userid'");
		$row=mysql_fetch_array($clg);
		echo $row['college'];
		 ?></td>
   </tr>
   <tr>
   <td>High School&nbsp;&nbsp;:&nbsp;</td><td><?php echo $row['highschool']; ?></td>
   <td rowspan="2" valign="top">
   <p onClick="showEducationalEdit()">Edit</p>
   </td>
   </tr>
   <tr>
   <td align="center" id="showEducationalEdit" colspan="2">
   <form action="php/insert_educational_details.php" method="post" class="clgedit">
   <p>New Study Center&nbsp;&nbsp;:&nbsp;<input type="text" name="new_study"></p>
   <p>High School&nbsp;&nbsp;:&nbsp;<input type="text" name="high_school"></p>
   <p><input type="submit" name="update"></p>
   </form>
   </td>
   </tr>
   </tr>
   
   
   <th>Living Details</th>
   <tr>
   <td>
   <p>Current city&nbsp;&nbsp;:<?php echo $row['current_city']; ?>&nbsp;</p></td>
   <td>Edit</td>
   </tr>
   
   <tr>
   <td>
   <p>Home Town&nbsp;&nbsp;:<?php echo $row['hometown']; ?>&nbsp;</p></td>
   <td>Edit</td>
   </tr>
      <br>
   <th>Contact Details</th>
   
   <tr>
   <td>
   <p>Mobile No&nbsp;&nbsp;:<?php echo $row['contact_no']; ?>&nbsp;</p></td>
   <td>Edit</td>
   </tr>
   
   <tr>
   <td>
   <p>Phone No&nbsp;&nbsp;:<?php echo $row['contact_no']; ?>&nbsp;</p></td>
   <td>Edit</td>
   </tr>
   <tr>
   <td>
   <p>Address&nbsp;&nbsp;:<?php echo $row['address']; ?>&nbsp;</p></td>
   <td>Edit</td>
   </tr>
       
  </table>
  
</div>