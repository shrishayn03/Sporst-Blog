function validate(){
	
	var title =document.editpro.title.value; 
	var lname =document.editpro.lname.value; 
	var email =document.editpro.email.value; 
	
	
	var x=document.editpro.email.value;  
	var atposition=x.indexOf("@");  
	var dotposition=x.lastIndexOf("."); 
	
	if (title==null || title==""){  
			alert(" First Name can't be blank");  
			return false;  
}			
	
	if (lname==null || lname==""){  
			alert(" Last Name can't be blank");  
			return false;  
}	


	if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
			alert("Please enter a valid e-mail address");  
			return false;  
}
} 