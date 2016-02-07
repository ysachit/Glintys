<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/2014/xhtml" xml:lang="en">
<head>
	<title>GlintYs ::Admin Panel</title>
    <link href="css/main.css" rel="stylesheet" />
    <link href="images/logo/favicon.png" rel="icon" />
    <script src="js/validation.js" type="application/javascript"></script>
</head>
<body>
<div>
	<div align="center"  class="container">
  		<img src="images/logo/sachit.png"  />
   		<h1>Welcome to GlintYs</h1>
    </div>	
    	<div class="row">
						<div align="center">
							 <h2 class="lb_ribbon lb_blue"><span>:: Admin Login ::</span>
                			  <span style="display:none">New password</span></h2>
						 </div>
									<div class="l_pane" align="center">
										<form action="php/login.php" method="post">
													<input type="text" id="input" name="username" placeholder="Username" required="required"/><br>
													<input type="password" id="input" name="password" placeholder="Password" required="required"/><br>
                                                   	<label for="remember"><input type="checkbox"> Remember me</label><br>
												<input type="submit" value="Login" id="submit" name="signin" />
                                           </form>
									</div>
									<div class="l_pane" style="display:none" align="center">
										<form action="dashboard.html" method="post" id="rp_form">
											<div class="sepH_c">
							<p>Please enter your email address. You will receive a link to create a new password via email.</p>
												<div>
													<input type="text" id="input" name="upname" placeholder="Enter your Email" />
												</div>
												<input type="submit" id="submit" value="Get new password" />
											</div>
										</form>
									</div>
								</div>
		     </div> 
             <div align="center">
           <p>  <h2 class="lb_ribbon lb_blue"></h2>
								<a href="#" class="right small sl_link">
									<span>Forgot your password?</span>
									<span style="display:none">Back to login form</span>
								</a>
             </p>
           </div> 
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