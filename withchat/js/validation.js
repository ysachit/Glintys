// JavaScript Document
function submit_validation()
     {
		 if(login.username.value=='')
		   {
			   alert("Please provide Username");
			   login.username.focus();
			   return false();  
			   }
			 if(login.password.value=='')
			    {
					alert("Also Enter the Password")
					login.password.focus();
					return false();
					}    
						 		    	
		 	}
function valid()
     {
		 if(regis.fname.value=='')
		   {
			   alert("First Name  is vacent");
			   regis.fname.focus();
			   return false();  
			   }
		if(regis.lname.value=='')
		   {
			   alert("Last Name is vacent");
			   regis.lname.focus();
			   return false();  
			   }
		
		var mobc=document.getElementByClass('mob');
		var pattern=/^([0-9]{10,10})+$/	   	   	   
		 	if(!pattern.test(mobc.value))
			  {
				  alert("Please Enter the valid Mobile No");
				  regis.mob.focus();
				  return false();
				   }  
		var emaill=document.getElementByClass('email');
		var pattern=/^([A-Za-z0-9.\_\-])+\@(([a-z0-9A-Z\-])+\.)+([a-z0-9A-Z]{3,3})+$/	
		if(!pattern.test(emaill.value))
			{
				alert("Please enter the valid email");
				regis.email.focus;
				return false;
			}
		if(regis.pass.value!==regis.rpass.value)
		     {
				 alert("Password Should Be Same")
				 regis.pass.focus();
				 return false;
				 }
		 if(!regis.chk.value.checked)
		   {
			   echo("Plese Agree with term and Condition");
			   }
				 		    	
		 	}
	 			
	 