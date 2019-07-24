function validate(){
	
	var firstname =document.registration.firstname.value; 
	var lastname =document.registration.lastname.value; 
	var email =document.registration.email.value; 
	var password =document.registration.password.value;
	var conpassword =document.registration.conpassword.value;
	var gender =document.registration.gender.value;
	

	
	var x=document.registration.email.value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf(".");  
	
	
	if (firstname==null || firstname==""){  
			alert(" First Name can't be blank");  
			return false;  
}			
	
	if (lastname==null || lastname==""){  
			alert(" Last Name can't be blank");  
			return false;  
}	


	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
			alert("Please enter a valid e-mail address");  
			return false;  
} 

if (gender==null || gender=="")
{  
			alert(" select the gender");  
			return false;  
}	

	if (password==null || password=="")
{  
  alert("password can't be blank");  
  return false;  
}

else if(password.length <8){  
			alert("Password must more than 8 characters long.");  
			return false;  
  } 
	
	  if(password==conpassword){  
		return true;  
		}  
else	{  
		alert("password Do Not Match !!!!");  
		return false;  
		}  
	
}	
	
	
	
