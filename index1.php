<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/2014/xhtml" xml:lang="en">
<head>
	<title>GlintYs :: Love,Learn,Live & Share your feelings.</title>
    <link href="css/main.css" rel="stylesheet" />
    <link href="images/logo/favicon.png" rel="icon" />
    <script src="js/validation.js" type="application/javascript"></script>
</head>
<body>
<div id="main">
	<div align="center" class="container">
   		<p>glintYs</p>
    </div>	
    	<div class="row">
						<div align="center">
							 <h2 class="lb_ribbon lb_blue"><span>Login to your Account</span>
                			  <span style="display:none">New password</span></h2>
						 </div>
									<div class="l_pane" align="center">
										<form action="php/login.php" method="post">
													<input type="text" id="user_input" name="username" placeholder="Username"/><br>
													<input type="password" id="user_input" name="password" placeholder="Password"/><br>
                                                   	<label for="remember"><input type="checkbox"> Remember me</label><br>
                                                    <select name="mode">
                                                      <option selected="selected">Plz select Mode...</option>
                                                      <option>Chat</option>
                                                      <option>Developer</option>
                                                      </select><br>
												<input type="submit" value="login" name="signin" id="submit" />
                                           </form>
									</div>
									<div class="l_pane" style="display:none" align="center">
										<form action="php/forgotpass.php" method="post" id="rp_form">
											<div class="sepH_c">
							<p>Please enter your email address. You will receive a link to create a new password via email.</p>
												<div>
													<input type="text" id="user_input" name="username" placeholder="Enter your Email" />
												</div>
												<input type="submit" value="Get new password"  id="submit"/>
											</div>
										</form>
									</div>
								</div>
             <div align="center">
           <p>  <h2 class="lb_ribbon lb_blue"></h2>
								<a href="#" class="right small sl_link">
									<span>Forgot your password?</span>
									<span style="display:none">Back to login form</span>
								</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="registration_user.php">Sign Up</a>
             </p>
           </div>
       </div>  
          <footer>
          <p>Developed By ::  Yaduvanshi S Kumar</p>
          </footer>
          </body> 
		<script src="js/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$(".sl_link").click(function(event){
					$('.l_pane').slideToggle('normal').toggleClass('dn');
					$('.sl_link,.lb_ribbon').children('span').toggle();
					event.preventDefault();
				});

			});
		</script>
        </div>
</body>
</html>