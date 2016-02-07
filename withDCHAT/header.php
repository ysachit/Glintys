 <?php
	include('php/connect_database.php');
	session_start();
    if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
				}
			?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <!--<title>Welcome :: <?php //echo "$_SESSION[fname]"; ?></title>-->
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
            <li><a href="work_area.php">Workarea</a></li>
            <li><a href="message.php" class="active">Message</a></li>
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
   
   
   <!---- Scripts ---->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
                $('#myModal').modal('hidden')
        </script>
    </body>
    </html>
