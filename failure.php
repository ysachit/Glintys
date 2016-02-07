<?php
//include('php/connect_database.php');
//?>
<?php
// session_start();
//     //If session has no userid saved
//	 //Redirect
//	   if(!isset($_SESSION['userid']))
//	    {
//			header("Location:../index.php");
//			}
//		$userid=$_SESSION['userid'];
// ?>
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
  <p>Oho ! You are not providing me <b>Valid Details</b></p>
  <p>I am smarter then you.Try Again</p> 
  <form action="insertupdate.php" name="basic" method="post">
  <input type="text" name="fname" placeholder="First Name"/><br />
  <input type="text" name="lname" placeholder="Last Name"/><br />
  <select name="status">Status
  <option>Status</option>
  <option>Developer</option>
  <option>Student</option>
  <option>Entrepreneur</option>
  </select><br />
  <select name="college">College
  <option>Amity University Rajasthan</option>
  <option>Amity University Noida</option>
  <option>Amity Patna</option>
  </select><br />
  <select name="sques">
  <option>Want a sequrity question to secure your account</option>
  <option>What is your first dog name ?</option>
  <option>What is your first school name ?</option>
  <option>What is your fav teacher name ?</option>
  </select><br />
  <input type="text" name="squesans" placeholder="Answer" /><br />
  <input type="submit" name="submit" value="Submit" />
  </form><br />
  <p>This session is automatically end for sequrity reason</p>
  </div>
  </div>
 </body>