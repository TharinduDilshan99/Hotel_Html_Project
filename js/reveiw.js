function validate(){
	var msg = document.getElementById("review").value;
	var len=msg.length;
	if (len < 20)
	{
		alert("Message is too small,length must be greater than 20 letters");
	}else
	{
		alert("Thank you for your feedback");
	}

}