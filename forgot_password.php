<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.default.css" type="text/css" />
    <link href="images/logo/favicon.png" rel="icon" />
    <title>GlintYs :: The Multipurpous Social Networking</title>
   <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script src="js/validation.js" type="application/javascript"></script>
</head>

<body class="loginpage">
<div class="lpanel">
    <div class="lpanelinner">
        <div class="logo animate0 bounceIn"><img src="images/logo/logo.png" alt="" /></div>
        <form id="login" action="php/forgotpass.php" method="post">
            <div class="lpanelinput animate1 bounceIn">
                <input type="text" name="email" id="email" placeholder="Enter Your Email" required title="Place your Valid Email Id"/>
            </div>
            <div class="lpanelinput animate4 bounceIn">
            <input type="submit" id="submit" name="forgot_password" onClick="forgot_password()" value="Get Password"/>
                <!--<button name="submit" onClick="forgot_password()">Get Password</button>-->
            </div>
          </form>
          <div class="lpanelinput animate4 bounceIn" align="center">
          <label><a href="index.php">Go Back</a></label>
            </div>
    </div>
</div>

<div class="loginfooter">
    <p>&copy; 2013. Glintys :: The Multipurpous Social Network</p>
</div>

</body>
</html>
