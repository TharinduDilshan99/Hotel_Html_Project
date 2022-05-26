function chkDate()
{
	var cinDate = document.getElementById("dateci").value;
	var coDate = document.getElementById("dateco").value;
    var CurrentDate = new Date();
    cinDate = new Date(cinDate);
	coDate = new Date(coDate);
	if(cinDate > CurrentDate)
	{
		if(coDate>cinDate)
		{
			return true;
		}else
		{
			alert("Check Out date must be greater than Check In date");
			return false;
		}
	}else{
		alert('Given Check In date is less than the current date.');
		return false;
	}
}