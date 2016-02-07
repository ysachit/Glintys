<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
<link href="css/layout.css" rel="stylesheet">
<script src="js/modernizr.custom.js" type="text/javascript"></script>
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>
	<script>
            $(document).ready(function(){
            $(".search").keyup(function() 
            {
            var searchbox = $(this).val();
            var dataString = 'searchword='+ searchbox;
            if(searchbox=='')
            {}
            else
            {
            $.ajax({
            type: "POST",
            url: "search.php",
            data: dataString,
            cache: false,
            success: function(html)
            {
            $("#display").html(html).show();
            }
            });
            }return false; 
            });
            });
       </script>
       </head>
 <body>  
    <div class="container">
    		<div class="main">
            	<div class="logo">
                  <a href="dashboard.php"><img src="images/logo/logo.png"/></a>
                    </div>
                  <nav>
                   <input type="text" name="search" id="search" class="search">
                   <div id="display">
                   </div>
                   </nav>
                  <div class="nav"><ul id="sddm">
	
	<li><a href="lol.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">Home</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">		  </div>
	</li>
	<li><a href="profile.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Profile</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">		  </div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="profile.php">	
		<?php 
//
//
//$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");
//
//echo "<br />";
//while($row = mysql_fetch_array($result))
//  {
//
//  echo "<img width=50 height=50 alt='Unable to View' src='" . $row["profImage"] . "'>";
//  echo '<br />';
//  echo $_SESSION['SESS_FIRST_NAME']." ". $row["LastName"] ;
// 
//  		//echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
//  		//echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';
//		
//  }
//
//?></a>
		<a href="editfriends.php">Edit Friend</a>
		<a href="accountsettings.php">Account Setting</a>	
		<a href="friends.php">SearchFriend</a>
		<a href="index.php">Logout</a>		 
         </div>
       </div>
