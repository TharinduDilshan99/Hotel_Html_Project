function log()
{
	var email = document.getElementById("email").value;
	var pwd = document.getElementById("pwd").value;
	
	if(email == "admin" && pwd=="admin")
	{
		window.location.href="admin.html";
	}else if(email == "john@mail.com" && pwd=="12345")
	{
		window.location.href="profile/profile1.html";
	}
	else if(email == "anne@mail.com" && pwd=="54321")
	{
		window.location.href="profile/profile2.html";
	}
	else
	{
		alert("Email or Password is not Valid");
	}
	
}
