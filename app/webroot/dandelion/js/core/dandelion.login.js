$(document).ready(function(){
	$("#da-login-form").validate(
	{
		"data[User][username]":{username:{required:true},
		"data[User][password]":{required:true}}
	});
});
