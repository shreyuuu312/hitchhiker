//validation of profile form

function validate_pwd_change()
{
	var oldpwd = document.forms["profile"]["oldpwd"].value;
	var newpwd = document.forms["profile"]["newpwd"].value;
if(oldpwd!="" && newpwd!="")
	if(oldpwd===newpwd)
	{
		alert("Current and New Passwords must not be same");
		return false;
	}
return true;
}	