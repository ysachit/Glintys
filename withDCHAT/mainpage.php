
    <?php
	include('php/connect_database.php');
	session_start();
    if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php?status=failure");
				}
			?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Welcome :: <?php echo "$_SESSION[fname]"; ?></title>
    <!-- styles -->
    <link href="img/favicon.png" rel="icon">
    <link href="css/bootstrap.css" rel="stylesheet">
    <!--<link href="css/bootstrap-responsive.css" rel="stylesheet">-->
    <link href="css/style.css" rel="stylesheet">
    <link href="font/css/fontello.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    </head>
  
  
  <body>
  
  
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
        <span class="icon-bar"></span> <span class="icon-bar"></span> 
        <span class="icon-bar"></span> </a> <a class="logo" href="dashboard.php"><img src="img/logo.png"/></a>
          <ul class="nav nav-collapse pull-right">
            <li><a href="message.php">Message</a></li>
            <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-trophy"></i><?php echo "$_SESSION[fname]"; ?><b class="caret"></b></a>
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
    <?php
	$user= $_SESSION['userid'];
	$ret1=mysql_query("SELECT * FROM user_details WHERE user_id=$user"); 
	echo $ret1[1];
	$result2=mysql_fetch_array($ret1);
	?>
    <div class="container profile">
      <div class="span3"> <?php echo "<img src="."img/".$_SESSION['profile_pic'].">";  ?>  </div>
      <div class="span5">
        <h1><?php echo "$_SESSION[full_name]"; ?></h1>
        <h3>Web &amp; Graphics Designer</h3>
        <p><?php echo $result2['college']; echo '<br>'; echo $result2['current_city']; ?>
         </p>
        <a href="work_area.php" class="hire-me"><i class="icon-paper-plane"></i> Go to the Work area </a> </div>
    </div>
    <!--END: Profile container-->
    <!-- Social Icons -->
      <div class="row social">
      <ul class="social-icons">
        <li><a href="<?php echo $result2['facebook_id'] ?>" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
        <!--<li><a href="#" target="_blank"><img src="img/go.png" alt="google plus"></a></li>
        <li><a href="#" target="_blank"><img src="img/pin.png" alt="pinterest"></a></li>
        <li><a href="#" target="_blank"><img src="img/st.png" alt="stumbleupon"></a></li>
        <li><a href="#" target="_blank"><img src="img/dr.png" alt="dribbble"></a></li>-->
      </ul>
    </div>
    <!-- END: Social Icons -->
   
   <!---- Scripts ---->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
        </script>
    </body>
    </html>
