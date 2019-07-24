function validate(){
	
	var title =document.editevents.title.value; 
	var author =document.editevents.author.value; 
	var date =document.editevents.date.value; 
	var image =document.editevents.file.value;
	var comment =document.editevents.comment.value;
	
	if (title==null || title==""){  
			alert(" Event Title can't be blank");  
			return false;  
}

	if (author==null || author==""){  
			alert(" Event Author  Name can't be blank");  
			return false;  
}

	if (date==null || date==""){  
			alert(" Event Date can't be blank");  
			return false;  
}

	if (image==null || image==""){  
			alert(" Event Image can't be blank");  
			return false;  
}
	
	if (comment==null || comment==""){  
			alert(" Event Description can't be blank");  
			return false;  
}

	
}