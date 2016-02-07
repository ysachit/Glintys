<?php
include('connect_database.php');
?>
<?php
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
			}
		$userid=$_SESSION['userid'];
 ?>
<link href="css/layout.css" rel="stylesheet">
<link href="css/layout.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
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
<div class="container">
    		<div class="mainmenu">
            	<div class="logo">
                <a href="dashboard.php"><img src="images/logo/logo.png"/></a>
                    </div>
                    <nav>
                    <input type="text" name="search" id="searchbox" class="search searchbox">
                    <div id="display">
                    </div>
                    </nav>
                   <div class="home_menu">
                      <a href="dashboard.php">Home</a>
                      <a href="#" id="showLeft">Profile</a>
                      <a href="#" id="showRight">Online Friends</a>
                      <a href="php/logout.php">Logout</a> 
            </div>
    </div>  
<body class="cbp-spmenu-push">
 <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
    <div id="profile_pic">
    <?php echo "<img src="."images/".$_SESSION['profile_img'].">";  ?> 
    </div>
     <table>
        <tr valign="top" align="center">
         <td id="name"><?php echo $_SESSION['full_name']; ?></td>
        </tr>
        <tr align="center">
        <td style="color:#000"><b><i>
		<?php 
		$clg=mysql_query("SELECT * From user_details WHERE id='".$_SESSION['userid']."'");
		$row=mysql_fetch_array($clg);
		echo $row['study_in'];
		 ?></i></b></td>
        </tr>
        <tr align="center">
        <td>Current Status : <b><?php 
		$clg=mysql_query("SELECT * From user_details WHERE id='".$_SESSION['userid']."'");
		$row=mysql_fetch_array($clg);
		echo $row['status'];
		 ?></b></td>
        </tr>
         <tr align="center">
        <td>Profile Type Open :<b>Chat</b></td>
        </tr>
      </table> 
      <div>&nbsp;
      </div>  
        <table>
           <tr>
            <td><a href="general_profile_update.php">General Settings</a></td>
            </tr>
            <tr>
            <td><a href="advance_profile_update.php">Advance Settings</a></td>
            </tr>
           <tr>
            <td><a href="#">Messages</a></td>
            </tr>
            <tr>
            <td><a href="#">Request</a></td>
            </tr>
            <tr>
            <td><a href="#">Find Friends</a></td>
            </tr>
           </table>			
		</nav>
		<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
        <div class="friend_list">
       <?php 
	   //$userid=$_SESSION['userid'];
$result = mysql_query("SELECT * FROM friendlist WHERE addby='$userid' and status='accepted' ORDER BY RAND() LIMIT 4");

echo "<br />";
while($row = mysql_fetch_array($result))
  {
  //echo '<td width="50px" colspan="0" rowspan="3" align="left" valign="top">';
  echo "<img width='30px' height='26px' src="."images/".$row['profile_img'].">";
  echo '<a href=friend_profile.php?id=' . $row["friend_id"] . '>' . $row['fname'] ." ".$row['lname'].'</a>';
  echo '<br>';
  }

	?>
    </div>
</nav>
<!-- Middle portion of the page-->
<nav class="cbp-spmenu-middle">
    <div class="middle_side1">
         <h3>Find Friend</h3>
         </div>
         
     <div class="middle_side2">
     <table>
     <form action="#" method="post">
     <tr>
     <td>
     <h2>Search friends Here</h2>
     </td>
     </tr>
     <tr>
     <td>
    <input type="text" name="name" placeholder="Enter the name">
     </td>
     </tr>
     <tr>
     <td>
     <input type="submit" name="search_user" value="Search">
     </td>
     </tr>
     </form>
     </table>
     <?php 
$result = mysql_query("SELECT * FROM user_details WHERE  username LIKE  '%$_POST[name]%' AND  fname LIKE  '%$_POST[name]%' AND  lname LIKE  '%$_POST[name]%'");
if(isset($_POST[search_user]))
{

while($recrows = mysql_fetch_array($result))
{
?>
<table width="453"  bgcolor="#99CCFF" >
  <tr>
    <td width="104" rowspan="3">
    <img src="<?php 
//www.freestudentprojects.com echo $recrows[profImage]; ?>" height="100" width="100" />
    </td>
    <td width="119">Name:</td>
    <td width="214">&nbsp;<?php 
//www.freestudentprojects.com echo $recrows[FirstName]. " ". $recrows[LastName]; ?></td>
  </tr>
  <tr>
    <td height="34">Location:</td>
    <td>&nbsp;<?php 
//www.freestudentprojects.com echo "City : ".$recrows[curcity]. "<br>Hometown: ". $recrows[hometown]; ?></td>
  </tr>
  </table>
<?php  
}
}
?>
      </div>
     </nav>

<!-- Javascript Code will start from here-->
		<script src="js/classie.js"></script>
		<script>
			var <!--menuLeft = document.getElementById( 'cbp-spmenu-s1' ),-->
				menuRight = document.getElementById( 'cbp-spmenu-s2' ),
				<!--showLeft = document.getElementById( 'showLeft' ),-->
				showRight = document.getElementById( 'showRight' ),
				body = document.body;

			<!--showLeft.onclick = function() {-->
				<!--classie.toggle( this, 'active' );-->
				<!--classie.toggle( menuLeft, 'cbp-spmenu-open' );-->
				<!--disableOther( 'showLeft' );-->
			<!--};-->
			showRight.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( menuRight, 'cbp-spmenu-open' );
				disableOther( 'showRight' );
			};

			/*function disableOther( button ) {
				if( button !== 'showLeft' ) {
					classie.toggle( showLeft, 'disabled' );
				}*/
				if( button !== 'showRight' ) {
					classie.toggle( showRight, 'disabled' );
				}				
			
		</script>
