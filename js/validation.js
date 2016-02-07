// JavaScript Document
function login_validation()
     {
		var email=document.getElementById('email');
		var pattern=/^([A-Za-z0-9.\_\-])+\@(([a-z0-9A-Z\-])+\.)+([a-z0-9A-Z]{3,3})+$/
		if(!pattern.test(email.value))
			{
				alert("Please enter valid Email");
				login.email.focus;
				return false;
			}
		var password=document.getElementById('password');
		var pattern=/^([A-Za-z0-9.\_\-])+$/	
		if(!pattern.test(password.value))
			{
				alert("Please enter valid Password	");
				login.password.focus;
				return false;
			}	
	 }	
	 
function forgot_password()
  {
	var email_id=document.getElementById('email');
	var pattern=/^([A-Za-z0-9.\_\-])+\@(([a-z0-9A-Z\-])+\.)+([a-z0-9A-Z]{3,3})+$/
	if(!pattern.test(email_id.value))
			{
				alert("Please enter the valid email");
				return false;
			}
	 	}		
				
function regis_validation()
     {	
	  var email=document.getElementById('email');
		var pattern=/^([A-Za-z0-9.\_\-])+\@(([a-z0-9A-Z\-])+\.)+([a-z0-9A-Z]{3,3})+$/
		if(!pattern.test(email.value))
			{
				alert("Please enter valid Email");
				login.email.focus;
				return false;
			}
	   if(valid.password.value!==valid.rpassword.value)
		     {
				 alert("Password Should be Same")
				 valid.password.focus;
				 return false;
				 }
		if(!valid.agree.value==checked)
		{
			alert("Please accept terms and condition");
			valid.agree.focus;
			return false;
			}		 
		 
	  }
	 