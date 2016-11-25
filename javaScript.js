<script language="JavaScript">
function validateForm() 
{
	var companyName = document.forms["register"]["companyName"].value;
	var companyType = document.forms["register"]["companyType"].value;
	var companyAddress = document.forms["register"]["companyAddress"].value;
	var contactPerson = document.forms["register"]["contactPerson"].value;
	var contactDesignation = document.forms["register"]["contactDesignation"].value;
	var mobile = document.forms["register"]["mobile"].value;
	var email = document.forms["register"]["email"].value;
	var password = document.forms["register"]["password"].value;
	var passwordConfirm = document.forms["register"]["passwordConfirm"].value;
    if (companyName == null || companyName == "") {
        alert("Company Name must be filled out");
        return false;
    }	    
	else if (companyType == "select") {
        alert("Company Type must be selected");
        return false;
    }
	else if (companyAddress == null || companyAddress == "") {
        alert("Company Address must be filled out");
        return false;
    }
	else if (contactPerson == null || contactPerson == "") {
        alert("Contact Person must be filled out");
        return false;
    }
	else if (contactDesignation == null || contactDesignation == "") {
        alert("Contact Designation must be filled out");
        return false;
    }
	else if (mobile == null || mobile == "") {
        alert("Mobile must be filled out");
        return false;
    }
	else if (email == null || email == "") {
        alert("Email must be filled out");
        return false;
    }
	else if (password == null || password == "") {
        alert("Password must be filled out");
        return false;
    }
	else if (passwordConfirm == null || passwordConfirm == "") {
        alert("Confirm Password must be filled out");
        return false;
    }	
	else if (passwordConfirm != password) {
        alert("Passwords do not match");
        return false;
    }	
	else if (passwordConfirm.length <6 || password.length<6 ) {
        alert("Password is too short");
        return false;
    }	
	else return true;
}
function register()
{
    document.getElementById("myForm").action = "registerAuth.php";
    return;
}
</script>