function validate(){
	
	var title =document.addevents.title.value; 
	var author =document.addevents.author.value; 
	var date =document.addevents.date.value; 
	var image =document.addevents.file.value;
	var comment =document.addevents.comment.value;
	
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