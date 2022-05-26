function validate(){
	var x = document.getElementById("msg").value;
	var len=x.length;
	if (len < 20)
	{
		alert("Message is too small,length must be greater than 20 letters");
	}else
	{
		alert("Thank you for your feedback");
	}

}