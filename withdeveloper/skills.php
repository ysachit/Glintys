        <?php
	session_start();
	include('php/connect_database.php');
    if(!isset($_SESSION['userid']))
	    {
			header("Location:../index.php");
				}
			?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="utf-8">
    <title>Welcome :: <?php echo "$_SESSION[fname]"; ?></title>
    <meta name="description" content="Flat Design Mini Portfolio">
    <meta name="keywords" content="responsive, bootstrap, flat design, flat ui, portfolio">
    <meta name="author" content="Dzyngiri">
    <meta name="description" content="This is a responsive flat design mini portfolio for creative folks who want to showcase their work online.">
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
         
            <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="icon-user"></i><?php echo "$_SESSION[fname]"; ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
             <li><a href="dashboard.php"><i class="icon-facebook-circled"></i>Profile</a></li>
            <li><a href="skills.php"><i class="icon-trophy"></i> Skills</a></li>
            <li><a href="work.html"><i class="icon-picture"></i>Project</a></li>
            <li><a href="resume.html"><i class="icon-doc-text"></i>Ranking</a></li>
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
    <!--Skills container-->
    <div class="container skills">
      <h2>My Skills</h2>
      <div class="row">
        <div class="span3">
          <div class="ps">
            <h3>Ps</h3>
          </div>
        </div>
        <div class="span5">
          <h3>Photoshop <span>89%</span></h3>
          <div class="expand-bg"> <span class="expand ps2"> &nbsp; </span> </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="ai">
            <h3>Ai</h3>
          </div>
        </div>
        <div class="span5">
          <h3>Illustrator <span>80%</span></h3>
          <div class="expand-bg"> <span class="expand ai2"> &nbsp; </span> </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="html">
            <h3>HTML5</h3>
          </div>
        </div>
        <div class="span5">
          <h3>HTML5 <span>75%</span></h3>
          <div class="expand-bg"> <span class="expand html2"> &nbsp; </span> </div>
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <div class="css">
            <h3>CSS3</h3>
          </div>
        </div>
        <div class="span5">
          <h3>CSS3 <span>85%</span></h3>
          <div class="expand-bg"> <span class="expand css2"> &nbsp; </span> </div>
        </div>
      </div>
    </div>
    <!--END: Skills container-->
    <!-- Social Icons -->
    <div class="row social">
      <ul class="social-icons">
        <li><a href="#" target="_blank"><img src="img/fb.png" alt="facebook"></a></li>
        <li><a href="#" target="_blank"><img src="img/tw.png" alt="twitter"></a></li>
      </ul>
    </div>
    <!-- END: Social Icons -->
    <!-- Footer -->
    <div class="footer">
      <div class="container">
        <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
        <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
      </div>
    </div>
    <!-- Contact form in Modal -->
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" placeholder="Yopur Name">
          <input type="text" placeholder="Your Email">
          <input type="text" placeholder="Website (Optional)">
          <textarea rows="3" style="width:80%"></textarea>
          <br/>
          <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
        </form>
      </div>
    </div>
    <!-- Scripts -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
            $('#myModal').modal('hidden')
    </script>
    </body>
    </html>
