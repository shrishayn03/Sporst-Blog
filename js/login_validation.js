function validate1(){

	var email =document.login.email.value; 
	var password =document.login.password.value;
	
	var x=document.login.email.value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf(".");  
	
	
	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
	{  
			alert("Please enter a valid e-mail address");  
			return false;  
	} 
	
	
	if (password==null || password=="")
	{  
  alert("password can't be blank");  
  return false;  
	}

else if(password.length <8)
	{  
			alert("Password must more than 8 characters long.");  
			return false;  
    } 
}