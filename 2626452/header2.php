     <?php
 session_start();
     //If session has no userid saved
	 //Redirect
	   if(!isset($_SESSION['userid']))
	    {
			header("Location:./index.php");
			}
 ?>
       <link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <header id="header">
            <hgroup>
              <img src="images/logo/sachit.png" id="header_img">
                <h1 class="site_title">GlintYs </a></h1>
                <h2 class="section_title">Dashboard</h2>
                <div class="btn_view_site"><a href="index.php">View Site</a></div>
            </hgroup>
        </header> <!-- end of header bar -->
        
        <section id="secondary_bar">
			<article class="breadcrumbs"><a href="dashboardother.php">Website Admin</a> 
			<div class="breadcrumb_divider"></div> <a class="current">Dashboard</a>
           </article>
        <form class="quick_search">
                <input type="text" value="Quick Search" onfocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
            </form>          
        </section><!-- end of secondary bar -->
        
        
           <aside id="sidebar" class="column">
              <div id="profile_pic">              
            <?php echo "<img src="."images/".$_SESSION['profile_img'].">";  ?>
              </div>
             <div>
               <p align="center" style="color:#09F; text-transform:uppercase;font-size:16px"><?php echo $_SESSION['full_name']; ?></p>	
              <hr>
              <ul class="toggle">
                <li class="icn_settings"><a href="admin_profile.php">Update Profile</a></li>
                <li class="icn_security"><a href="#">Security</a></li>
                <li class="icn_edit_article"><a href="change_password.php">Change Password</a></li>
                <li class="icn_jump_back"><a href="php/logout.php" title="Logout">Logout</a></li>
              </ul>
            </div>
            <hr/>
            <h3>User Manager</h3>
            <ul class="toggle">
                <li class="icn_add_user"><a href="all_user.php">View User</a></li>
                <li class="icn_view_users"><a href="block_users.php">Block User</a></li> 
                <li class="icn_view_users"><a href="show_blockedusers.php">Blocked User</a></li> 
            </ul>
            <hr>
             <h3>Content Manager</h3>
            <ul class="toggle">
                <li class="icn_add_user"><a href="#">Analysis Data</a></li>
                <li class="icn_view_users"><a href="#">Fix Bugs</a></li>                
                <li class="icn_view_users"><a href="#">Handle User</a></li>
                <li class="icn_profile"><a href="#">Website Trends</a></li>
                <li class="icn_profile"><a href="#">Security Feature</a></li>
            </ul>
               <footer>
                <hr />
                <p><strong>Copyright &copy; Yaduvanshi S Kumar</strong></p>	
            </footer>
        </aside><!-- end of sidebar -->