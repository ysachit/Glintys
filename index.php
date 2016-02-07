<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.default.css" type="text/css" />
    <link href="images/logo/favicon.png" rel="icon" />
    <title>GlintYs :: The Multipurpous Social Networking</title>
   <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script src="js/validation.js" type="application/javascript"></script>
<!--<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#login').submit(function(){
            var u = jQuery('#username').val();
            var p = jQuery('#password').val();
			  if(u == '' && p == '') {
                jQuery('.login-alert').fadeIn();
                return false;
            }
        });
    });
</script>-->

<script>
// makes sure the whole site is loaded
jQuery(window).load(function() {
        // will first fade out the loading animation
	jQuery("#status").fadeOut();
        // will fade out the whole DIV that covers the website.
	jQuery("#preloader").delay(2000).fadeOut("slow");
})
</script>
</head>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<body class="loginpage">
<div class="lpanel">
    <div class="lpanelinner">
        <div class="logo animate10 bounceIn"><img src="images/logo/logo.png" alt="Glintys" /></div>
        <form id="login" action="php/login.php" method="post" onSubmit="return login_validation()" name="login">
        <div align="center" style="color:#FF0">
		<?php 
		if(isset($_GET['try']) && $_GET['try']=='f')
		{ 
		echo 'Invalid username or password'; 
		} 
		if(isset($_GET['status']) && isset($_GET['status'])== 'failure')
		{
			echo 'Please login first.';
			} ?>
            </div>
        <?php
//        if(isset($_GET['status']) && isset($_GET['status'])== 'failure')
//		{
//			echo 'Please login first.';
//			}
//		?>
             <div class="lpanelinput animate11 bounceIn">
             <input type="text" name="email" id="email" placeholder="Enter your Email" required title="Place Your Email Please"/>
            </div>
            <div class="lpanelinput animate12 bounceIn">
                <input type="password" name="password" id="password" placeholder="Enter your password" required title="Place your Password Please"/>
            </div>
        <div class="lpanelinput animate13 bounceIn" align="center">
           <label><input type="radio" name="mode" value="Chat" checked/>Chat</label>&nbsp;
           <label><input type="radio" name="mode" value="Developer"/>Developer</label>&nbsp;
           <label><input type="radio" name="mode" value="DChat"/>Developer & Chat</label>
            </div>
            <div class="lpanelinput animate14 bounceIn">
            <input type="submit" name="submit" id="submit" value="Sign In here" onClick="login_validation()"/>
                <!--<button name="submit" onClick="login_validation()">Sign In</button>-->
            </div>
            <div class="lpanelinput animate15 bounceIn">
                <label><input type="hidden" class="remember" name="remember" />Enter valid Info.....!</label>
                <label class="forgot"><a href="forgot_password.php">Forgot Password ?</a></label>
            </div>
         </form>
         <div class="animate15 bounceIn">
         <a href="registration_user.php" class="signup">SignUp</a>
          </div>
     </div>      <!--loginpanelinner-->
</div>    <!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2014. Glintys :: The Multipurpous Social Network</p>
</div>
</body>
</html>
