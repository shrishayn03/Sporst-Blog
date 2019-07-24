function validate1(){
	
	var current =document.form.current.value; 
	var confirm =document.form.confirm.value; 
	var confirm1 =document.form.confirm1.value; 
	
	if (current==null || current=="")
	{  
  alert("Current Password can't be blank");  
  return false;  
	}

	if (confirm==null || confirm=="")
	{  
  alert("New Password can't be blank");  
  return false;  
	}
	
	
else if(confirm.length <8)
	{  
			alert("New Password must more than 8 characters long.");  
			return false;  
    } 
	
	if (confirm !== confirm1)
	{  
  alert("New Password Not Match");  
  return false;  
	}
	
	
	
}