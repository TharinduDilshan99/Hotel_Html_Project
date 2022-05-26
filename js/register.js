function checkPass()
{
	var pwd1 = document.getElementById("pwd");
	var pwd2 = document.getElementById("pwdc");
	
	if(pwd1.value == pwd2.value)
	{
		return true;
	}else
	{
		alert("Password didn't match");
		return false;
	}
}
function acceptTerms()
{
	var chk = document.getElementById("chkTerms");
	var sub = document.getElementById("btnReg");
	
	if(chk.checked)
	{
		sub.disabled=false;
	}else
	{
		sub.disabled=true;
	}
	
}