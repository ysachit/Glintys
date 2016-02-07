<p>Main</p>
<div style="margin-left:10px;">
<?php
include('php/connect_workstation.php');
session_start();
$userid=$_SESSION['userid'];
$a =  mysql_query("SELECT * from file WHERE user_id = '$userid'");
while($ads = mysql_fetch_assoc($a))
{
	if($ads['subfolder'] = 'MAIN')
	{   
		echo $ads['file'];
		echo '<br>';
		if($ads['subfolder'] = $ads['file'] )
		 {
$b =  mysql_query("SELECT * from file WHERE user_id = '$userid' and sunfolder = '".$ads['file']."'");	
 while($as = mysql_fetch_assoc($a))
    {
		echo '<br>';
	echo  $as['file'];
	  
	}	 
			 }
		echo '<br>';
		}	
//$b =  mysql_query("SELECT * from file WHERE user_id = '$userid' and sunfolder = 'Project'");	
// while($as = mysql_fetch_assoc($a))
//{
//	if($as['subfolder'] = 'MAIN')
//	{
//		echo $ads['file'];
//		echo '<br>';
//		}	
}
?>
</div>