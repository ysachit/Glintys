<?php
include('php/connect_database.php');
include('profile_show.php');
include('online_friends.php');
?>
<title>Find Friends</title>
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
<body>		        
<nav class="cbp-spmenu-middle" style="margin-top:40px;">
    <div class="middle_side1">
         <p>People you may know</p>
         <br>
        <?php 
	/*	$abc =mysql_query("SELECT * FROM friends WHERE(friend_two ='$userid') AND status='1'");
		$abd = mysql_fetch_array($abc);
		$adss = $abd['friend_one'];
		$ac =mysql_query("SELECT * FROM friends WHERE(friend_one ='$userid') AND status='1'");
		$ad = mysql_fetch_array($ac);
		$abss = $ad['friend_two'];*/
//$re = mysql_query("SELECT * FROM user_details WHERE((user_id !='$userid')&& (user_id !='$abss')&& (user_id !='$adss'))");
$re = mysql_query("SELECT * FROM user_details WHERE(user_id !='$userid')");
while($pumk = mysql_fetch_array($re))
{?>
<table>
  <tr>
    <td rowspan="3">
    <?php echo "<img height='100px' width='100px' src="."images/".$pumk['profile_pic'].">"; ?>
    </td>
    <td>&nbsp;<?php 
    echo '<a href=friend_profile1.php?id=' . $pumk["user_id"] . '>' . $pumk['fname'] ." ".$pumk['lname'].'</a>'; ?></td>
  </tr>
  <tr>
    <td>&nbsp;<?php 
	echo $pumk['college'] ?></td>
  </tr>
 </table> 
<?php 
}
?>
         </div>
         
     <div class="middle_side2">
     <table>
     <form action="find_friends.php" method="post">
     <tr>
     <td>
     <h2>Search friends Here</h2>
     </td>
     </tr>
     <tr>
     <td>
    <input type="text" name="search_name" placeholder="Enter the name">
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
if(isset($_POST['search_user']))
{
$rslt = mysql_query("SELECT * FROM user_details WHERE fname LIKE  '$_POST[search_name]%' or  lname LIKE  '$_POST[search_name]%'");
while($recrows = mysql_fetch_array($rslt))
{?>
<table width="345"  bgcolor="#0c9" style="margin-left:0px;" id="users">
  <tr>
    <td rowspan="2">
    <?php echo "<img height='100px' width='100px' src="."images/".$recrows['profile_pic'].">"; ?>
    </td>
    <td><?php 
	 echo '<a href=friend_profile1.php?id=' . $recrows["user_id"] . '>' . $recrows['fname'] ." ".$recrows['lname'].'</a>' ?></td>
  </tr>
  <tr>
    <td height="34"><?php 
	echo $recrows['college'] ?></td>
  </tr>
  </table> 
<?php 
}
}
?>
      </div>
     </nav>
