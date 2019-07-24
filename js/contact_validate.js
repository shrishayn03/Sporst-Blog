
$("#frmDemo").submit(function(e) {
	e.preventDefault();
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	
	if(name == "") 
	{
		$("#error_message").show().html("Name is Required");
	} else 
		if(email == "") 
	{
		$("#error_message").show().html("Email are Required");
	} else
		
		if(message == "") 
	{
		$("#error_message").show().html("Message is Required");
	} else 
{
		$("#error_message").html("").hide();
		$.ajax({
			type: "POST",
			url: "../contact_message.php",
			data: "name="+name+"&email="+email+"&message="+message,
			success: function(data){
				$('#success_message').fadeIn().html(data);
				setTimeout(function() {
					$('#success_message').fadeOut("slow");
				}, 2000 );

			}
		});
	}
})
