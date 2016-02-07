<?php
include('php/connect_database.php');
?>
<?php
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:index.php");
			}
		$userid=$_SESSION['userid'];
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/layout2.css" rel="stylesheet">
<link href="images/logo/favicon.png" rel="icon" />
        </head>
 <body>  
    <div class="container">
    		<div class="main">
            	<div class="logo">
                  <a href="dashboard.php"><img src="images/logo.png"/></a>
                    </div>
                 <ul id="dropdown">
		        <li><a href="php/logout.php">Logout</a>	</li>
				</ul>	
	    </div>	
    </div>
  <div class="kumar">
  <div class="input1" align="center">
  <p>Sorry ! You have not updated your profile.</p>
  <p>Please Enter your <b>Basic Details</b> for your further move.</p> 
  <form action="php/insertupdate.php" name="basic" method="post">
  <input type="text" name="fname" placeholder="First Name" pattern="[a-zA-Z ]{3,12}" required="required"/><br />
  <input type="text" name="lname" placeholder="Last Name" pattern="[a-zA-Z ]{3,12}" required="required"/><br />  
  
  <select name="status">
  <option value=" ">Status</option>
  <option value="Developer">Developer</option>
  <option value="Student">Student</option>
  <option value="Entrepreneur">Entrepreneur</option>
<!--  <option value="Farmer">Farmer</option>
  <option value="maid">Maid</option>-->
  </select><br />
  
  <select name="college">
  <option value=" ">College</option>
  <option value="Amity University Rajasthan">Amity University Rajasthan</option>
  <option value="Amity University Noida">Amity University Noida</option>
  <option value="Amity Patna">Amity Patna</option>
  <!--<option value="others">Other</option>-->
  </select><br />
  
  <select name="sques">
  <option value=" ">Secure your account.</option>
  <option value="What is your first dog name ?">What is your first dog name ?</option>
  <option value="What is your first school name ?">What is your first school name ?</option>
  <option value="What is your fav teacher name ?">What is your fav teacher name ?</option>
  </select><br />
  
  <input type="text" name="squesans" placeholder="Answer" pattern="[a-zA-Z0-9 ]{3,12}" required="required"/><br />
  <input type="submit" name="submit" value="Submit" />
  </form><br />
  <p>This session is automatically end for security reasons.</p>
  </div>
  </div>
 </body>