//validation of forms

function validate_login()
{
var name = document.forms["login_form"]["email_id"].value;
	alert("Welcome "+name+"!\nYour account has been successfully created.");
	return false;
}