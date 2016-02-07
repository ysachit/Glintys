<?php
include('profile_show.php'); 
include('online_friends.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Edit Profile :</title>
   <link href="css/update_profile.css" rel="stylesheet" />
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/validation.js" type="text/javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
function show1()
{
	$('#name').toggle();
	$('#stat').toggle();
	$('#rel').toggle();
	$('#username').toggle();
	$('#username1').toggle();
	$('#status').toggle();
	$('#relstatus').toggle();
	$('#sum1').toggle();
	}
function show2()
{
	$('#work').toggle();
	$('#col').toggle();
	$('#high').toggle();
	$('#workplace').toggle();
	$('#work12').toggle();
	$('#college').toggle();
	$('#highschool').toggle();
	$('#sum2').toggle();
	}
function show3()
{
	$('#cplace').toggle();
	$('#bplace').toggle();
	$('#dplace').toggle();
	$('#place').toggle();
	$('#birthplace').toggle();
	$('#dreamplace').toggle();
	$('#sum3').toggle();
	}
function show4()
{
	$('#mno').toggle();
	$('#email').toggle();
	$('#add').toggle();
	$('#mobile').toggle();
	$('#email_id').toggle();
	$('#address').toggle();
	$('#sum4').toggle();
	}
				
</script>
</head>
<body>
<div class="spmenu-middle">
   <p> Profile Update</p>
   <?php
   $dr = mysql_query("SELECT * from user_details WHERE user_id=$userid");
   $dsa= mysql_fetch_array($dr);
   $sac = mysql_query("SELECT * from workplace WHERE user_id=$userid");
   $cas = mysql_fetch_array($sac);
   ?>
         <div class="a1">
        <table>
       <th>Basic</th><th onclick="show1()">Edit</th>
       <tr>
       <form action="php/update_basic.php"  method="post">
       <td>Name</td>
       <td id="name"><?php echo $dsa['fname']." ".$dsa['lname']; ?></td>
       <td><input type="text" id="username" name="fname" placeholder="<?php echo $dsa['fname']; ?>"/>
       <input type="text" id="username1" name="lname" placeholder="<?php echo $dsa['lname']; ?>"/></td>
       </tr>
       <tr>
       <td>Current Status</td>
       <td id="stat"><?php echo $dsa['status']; ?></td>
       <td><select name="status" id="status">
       <option value="Developer">Developer</option>
       <option value="Student">Student</option>
       <option value="Entrepreneur">Entrepreneur</option>
       </select></td>
       </tr>
       <tr>
       <td>Relationship</td>
       <td id="rel"><?php echo $dsa['relationship_status']; ?></td>
       <td><select name="relstatus" id="relstatus">
       <option value="In a Relationship">In a relationship</option>
       <option value="Complicated">Complicated</option>
       <option value="Single">Single</option>
       </select></td>
       </tr>
       <tr>
       <td colspan="2" id="sum1"><input type="submit" name="sub1" id="searchForm" value="Submit" /></td>
       </tr>
       <tr align="center" style="color:#f00">
       <td>
	   <?php if(isset($_GET['success']) && $_GET['success'] == 1 )
	   {
		   echo 'Changes Saved';
		   		   }
	    ?></td>
       </tr>
       </form>
        </table>
        
      </div>
     <div class="a2">
                <table>
       <th>Work & Education</th><th onclick="show2()">Edit</th>
       <tr>
       <form action="php/work_edu.php"  method="post">
       <td>Work Place</td>
       <td id="work"><b><?php echo $cas['designation']?></b> at <b><?php echo $cas['company'];?></b></td>
       <td><select name="desg" id="workplace">
       <option value="">Designation</option>
       <option value="CEO">CEO</option>
       <option value="Co-CEO">CO-CEO</option>
       <option value="Employee">Employee</option>
       <option value="Teacher">Teacher</option>
       <option value="Student">Student</option>
       </select>
       <select name="workplace" id="work12">
       <option value="">Workplace</option>
       <option value="Amity University">Amity University</option>
       <option value="Magnetron">Magnetron</option>
       <option value="Google">Google</option>
       <option value="Glintys">Glintys</option>
       <option value="None">None</option>
       </select>       
      </td>
       </tr>
       <tr>
       <td>College</td>
       <td id="col"><?php echo $dsa['college']; ?></td>
       <td><input type="text" id="college" name="college" placeholder="<?php echo $dsa['college']; ?>"/></td>
       </tr>
       <tr>
       <td>High School</td>
       <td id="high"><?php echo $dsa['highschool']; ?></td>
       <td><input type="text" id="highschool" name="high" placeholder="<?php echo $dsa['highschool']; ?>"/></td>
       </tr>
       <tr>
       <td colspan="2" id="sum2"><input type="submit" name="sub2" value="Submit" /></td>
       </tr>
      <tr align="center" style="color:#f00">
       <td>
	   <?php if(isset($_GET['success']) && $_GET['success'] == 2 )
	   {
		   echo 'Changes Saved';
		   		   }
	    ?></td>
       </tr>
       </form>
        </table>
      </div>
      <div class="a3">
                <table>
       <th>Place you've Lived</th><th onclick="show3()">Edit</th>
       <tr>
       <form action="php/place_u_lived.php"  method="post">
       <td>Current Place</td>
       <td id="cplace"><?php echo $dsa['current_city']; ?></td>
       <td><input type="text" id="place" name="currentplace" placeholder="<?php echo $dsa['current_city']; ?>"/></td>
       </tr>
       <tr>
       <td>Birth Place</td>
       <td id="bplace"><?php echo $dsa['hometown']; ?></td>
       <td><input type="text" id="birthplace" name="birthplace" placeholder="<?php echo $dsa['hometown']; ?>"/></td>
       </tr>
<!--       <tr>
       <td>Dream Place</td>
       <td id="dplace">Silicon Velly//Insert *</td>
       <td><input type="text" id="dreamplace" name="dreamplace"/></td>
       </tr>-->
       <tr>
       <td colspan="2" id="sum3"><input type="submit" name="sub3" value="Submit" /></td>
       </tr>
        <tr align="center" style="color:#f00">
       <td>
	   <?php if(isset($_GET['success']) && $_GET['success'] == 3 )
	   {
		   echo 'Changes Saved';
		   		   }
	    ?></td>
       </tr>
       </form>
        </table>
      </div>
      <div class="a4">
                <table>
       <th>Contact & Basic Info</th><th onclick="show4()">Edit</th>
       <tr>
       <form action="php/contact_basic_update.php"  method="post">
       <td>Mobile No:-</td>
       <td id="mno"><?php echo $dsa['contact_no']; ?></td>
       <td><input type="text" id="mobile" name="mobile_no" pattern="[0-9]{10}" placeholder="<?php echo $dsa['contact_no']; ?>"/></td>
       </tr>
       <tr>
       <td>Email Id</td>
       <td id="email"><?php echo $dsa['email_id']; ?></td>
       <td><input type="text" id="email_id" readonly="readonly" name="email_id" placeholder="<?php echo $dsa['email_id']; ?>"/></td>
       </tr>
       <tr>
       <td>Address</td>
       <td id="add"><?php echo $dsa['address']; ?></td>
       <td><input type="text" id="address" name="address" placeholder="<?php echo $dsa['address']; ?>"/></td>
       </tr>
       <tr>
       <td colspan="2" id="sum4"><input type="submit" name="sub4" value="Submit" /></td>
       </tr>
       <tr align="center" style="color:#f00">
       <td>
	   <?php if(isset($_GET['success']) && $_GET['success'] == 4 )
	   {
		   echo 'Changes Saved';
		   		   }
	    ?></td>
       </tr>
       </form>
        </table>
      </div>
      <div style="width:300px">
   <h1><a href="profile_pic.php">Update Profile Pic</a></h1>
   </div>
   </div>

</body>
</html>