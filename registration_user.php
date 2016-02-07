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
        <div class="logo animate0 bounceIn"><img src="images/logo/logo.png" alt="Glintys" /></div>
        <form id="login" action="php/insert_user.php" method="post" onSubmit="return regis_validation()" name="valid">
            <div class="lpanelinput animate1 bounceIn">
        <input type="text" name="email" id="email" placeholder="Email" required><br>
        <div class="animate2 bounceIn">
        <input type="password" name="password" placeholder="Password" required><br>
        <div class="animate3 bounceIn">
        <input type="password" name="rpassword" placeholder="Confirm Password" required><br>
        <div class="animate4 bounceIn">
   <label><input type="checkbox" name="agree" id="agree" required title="Please do accept term and condition."/>Accept term and condition.</label>
       <div class="animate5 bounceIn">
        <input type="submit" name="signup" id="signup" onClick=" regis_validation()" value="Sign Up Free"><br>
                <label><a href="index.php">&nbsp;&nbsp;Return to Login ?</a></label>&nbsp;&nbsp;
                <label class="forgot"><a href="forgot_password.php">Forgot Password ?</a></label>
            </div>
            </div>
            </div>
         </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->
<div id="sachit">

</div>

<div class="loginfooter">
    <p>&copy; 2014. Glintys :: The Multipurpous Social Network</p>
</div>
</body>
</html>
