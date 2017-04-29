function checkForm() {
// Fetching values from all input fields and storing them in variables.
var  first_name = document.getElementById("fname").value;
var last_name = document.getElementById("lname").value;
var username = document.getElementById("uname").value;
var password1 = document.getElementById("pass1").value;
var company_name = document.getElementById("cname").value;
var email = document.getElementById("email1").value;
var mobile_number = document.getElementById("mnum").value;
var country = document.getElementById("country1").value;
//Check input Fields Should not be blanks.
if (first_name == '' || last_name == '' || user_name == '' || password1 == '' || company_name == '' || email == '' || mobile_number == '' || country == '') {
alert("Fill All Fields");
} else {
//Notifying error fields
var fname = document.getElementById("first_name");
var lname = document.getElementById("last_name");
var uname = document.getElementById("user_name");
var pass1 = document.getElementById("password1");
var cname = document.getElementById("company_name");
var email1 = document.getElementById("email");
var mnum = document.getElementById("mobile_number");
var country1 = document.getElementById("country");
//Check All Values/Informations Filled by User are Valid Or Not.If All Fields Are invalid Then Generate alert.
if (fname.innerHTML == 'Must be 2+ letters' || lname.innerHTML == 'Must be 2+ letters' || uname.innerHTML == 'must be valif' || pass1.innerHTML == 'Password too short' || cname == 'Not Valid' || email11.innerHTML == 'Invalid email' || mnum.innerHTML == 'Invalid' ) {
alert("Fill Valid Information");
} else {
//Submit Form When All values are valid.
document.getElementById("myForm").submit();
}
}
}
// AJAX code to check input field values when onblur event triggerd.
function validate(field, query) {
var xmlhttp;
if (window.XMLHttpRequest) { // for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else { // for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = "Validating..";
} else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
document.getElementById(field).innerHTML = xmlhttp.responseText;
} else {
document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
}
}
xmlhttp.open("GET", "validate.php?field=" + field + "&query=" + query, false);
xmlhttp.send();
}