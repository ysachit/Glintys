<?php
include('php/connect_database.php');
session_start();
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from user_details where fname like '$q%' or lname like '$q%' order by user_id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['fname'];
$lname=$row['lname'];
$img=$row['profile_pic'];
$status=$row['status'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);
$final_lname = str_ireplace($q, $re_lname, $lname);


?>
<div class="display_box" align="left">

<?php echo "<img src="."images/".$row['profile_pic'].">"; ?> <?php echo '<a href=friend_profile1.php?id=' . $row["user_id"] . '>' . $final_fname ." ".$final_lname.'</a>'; ?><br/>
<span style="font-size:12px; color:#FFF"><?php echo $status; ?></span></div>



<?php
}

}
else
{

}


?>
<style>
   .display_box img
    {
		width:26px;
		height:26px;
		float:left;
		margin-right:15px;
		}
		</style>