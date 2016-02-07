    <?php
	session_start();
	include('php/connect_database.php');
	include('online_friends.php');
    if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php?status=failure");
				}
			?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Workarea :  <?php echo "$_SESSION[fname]"; ?></title>
    <!-- styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--<link href="css/bootstrap-responsive.css" rel="stylesheet">-->
    <link href="css/style.css" rel="stylesheet">
    <link href="font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
     <style>
	textarea
	{
		background:#000;
		color:#FFF;
		font-size:12px;
		}
	textarea:focus
	{
		background:#000;
		font-size:12px;
		}	
	</style>
    <script>
      function checkFile(fieldObj)
    {
        var FileName  = fieldObj.value;
        var FileExt = FileName.substr(FileName.lastIndexOf('.')+1);
   
       if ( (FileExt != "txt" && FileExt != "php" && FileExt != "html" && FileExt != "htm"))
        {
            var error = "File type : "+ FileExt+"\n\n";
            error += "I think you can't edit this format.\n\n";
            alert(error);
			$(".file").hide();
            return false;
        }
		$(".file").show();
        return true;
    }
	</script>
    </head>
  
  
  <body>
  
  
      <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
        <span class="icon-bar"></span> <span class="icon-bar"></span> 
        <span class="icon-bar"></span> </a> <a class="logo" href="dashboard.php"><img src="img/logo.png"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="#" class="active">Workarea</a></li>
            <li><a href="message.php">Message</a></li>
            <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i><?php echo "$_SESSION[fname]"; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
             <li><a href="dashboard.php"><i class="icon-facebook-circled"></i>Profile</a></li>
            <li><a href="php/logout.php"><i class="icon-cancel"></i>Logout</a>	</li>          
              </ul>
           </li>
        </ul>
          <!-- Everything you want hidden at 940px or less, place within here -->
          <div class="nav-collapse collapse">
            <!-- .nav, .navbar-search, .navbar-form, etc -->
          </div>
        </div>
      </div>
    </div>
    <!--Profile container-->
     <table>
    <tr>
    <td>
    <form action="php/uploadfile.php" method="post" enctype="multipart/form-data">
    <p style="margin-left:20px; margin-top:3px;">Upload file to the work area : <input type="file" name="abc" onChange="checkFile(this)" required>
    <input type="submit" name="filesubmit" class="file" value="Upload It"></p>
    </form>
    <div style="margin-top:10px; margin-left:10px; width:800px;">
    <?php
	   $ags =mysql_query("SELECT * from file_saved WHERE user_id = '$userid' ");
	   $af = mysql_fetch_assoc($ags);
	    if($af['file_name']=='')
	   {

		   }
		   else
		   {
	   $line_array = file("file_saved/".$userid."/".$af['file_name']."");
		   }
	?>
<form action="savefile.php" method="post" enctype="multipart/form-data">
<textarea name="program" style="width: 750px; height: 450px">
<?php
  if($line_array == '')
  {
	  echo 'Create first Program';
	  }
	 else
	 { 
 echo implode("",$line_array);
	 }
	 ?></textarea>
</div>  
</td>
<td>
You are recently working on <b style="color:#0c9;"> <?php echo $af['file_name']; ?><b><br>
Note : Please copy your code in your local computer before logout.We are not saving your file. Thanks<br><hr>
<input type="submit" name="submit" formtarget="_blank" value="Submit"/>
<!--<input type="button" formtarget="_blank" name="submit" value="Output"/>-->
</form>

<!--<input type="submit" name="save" value="Save to Computer"/>-->

<hr>	
</td>
</tr>
</table>
<?php
/*if(isset($_POST['submit']))
{
	  if($_POST['submit'] == 'Save')
	  {
	$data = $_POST['program'];
	$name = $af['file_name'];
	$userid = $_SESSION['userid'];
	$fd = fopen("file_saved/".$userid."/".$name."","w+");
	$fout = fwrite($fd,$data);
	if($fout)
	{
		echo 'Done';
		}
	fclose($fd);	
	}
else
{
	header('Location:savefile.php');
	}
}*/
?>

   
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
        </script>
    </body>
    </html>
