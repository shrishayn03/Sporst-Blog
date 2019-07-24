function validate(){
	
	var title =document.addnews.title.value; 
	var author =document.addnews.author.value; 
	var date =document.addnews.date.value; 
	var image =document.addnews.file.value;
	var comment =document.addnews.comment.value;
	
	if (title==null || title==""){  
			alert(" Post Title can't be blank");  
			return false;  
}

	if (author==null || author==""){  
			alert(" Post Author can't be blank");  
			return false;  
}

	if (date==null || date==""){  
			alert(" Post Date can't be blank");  
			return false;  
}

	if (image==null || image==""){  
			alert(" Post Image can't be blank");  
			return false;  
}
	
	if (comment==null || comment==""){  
			alert(" Post details can't be blank");  
			return false;  
}

	
}