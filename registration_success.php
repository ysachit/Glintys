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
</head>

<body class="loginpage">
<div class="lpanel">
    <div class="lpanelinner">
        <div class="logo animate0 bounceIn"><img src="images/logo/logo.png" alt="Glintys" /></div>
            <div class="lpanelinput animate1 bounceIn" id="regis_success">
                <p id="msg"><b>Registration Successful.</b></p> <p>Please check your registered email to validate your account</p>
            </div>
            <div>&nbsp;
            </div>
         <div class="animate1 bounceIn">
         <a href="registration_user.php" class="signup">Back to SignUp</a>
         <a href="index.php" id="submit">Back to SignIn</a>
          </div>
     </div>      <!--loginpanelinner-->
</div>    <!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2014. Glintys :: The Multipurpous Social Network</p>
</div>
</body>
</html>
