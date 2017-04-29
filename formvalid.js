function formValidation() {
// Make quick references to our fields.
var firstname = document.getElementById('fname');
var lastname = document.getElementById('lname');
var working = document.getElementById('workinghours');
var rate = document.getElementById('rate');
var detail = document.getElementById('detail');
var email = document.getElementById('email');
var mobilenumber = document.getElementById('mnum');
var location1 = document.getElementById('location');
// To check empty form fields.
if (firstname.value.length == 0) {
document.getElementById('head').innerText = "* All fields are mandatory *"; // This segment displays the validation rule for all fields
firstname.focus();
return false;
}
// Check each input in the order that it appears in the form.
if (inputAlphabet(firstname, "* For your  first name please use alphabets only *")) {
if (inputAlphabet1(lastname, "* For your last name please use alphabets only *")) {	
if (lengthDefine(working,6,8)) {

return true;

}
}
}

return false;
}

// Function that checks whether input text is numeric or not.

// Function that checks whether input text is an alphabetic character or not.
function inputAlphabet(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p1').innerText = alertMsg; // This segment displays the validation rule for name.
//alert(alertMsg);
inputtext.focus();
return false;
}
}
function inputAlphabet1(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p2').innerText = alertMsg; // This segment displays the validation rule for name.
//alert(alertMsg);
inputtext.focus();
return false;
}
}
function lengthDefine(inputtext, min, max) {
var uInput = inputtext.value;
if (uInput.length >= min && uInput.length <= max) {
return true;
} else {
document.getElementById('p3').innerText = "* Please enter between " + min + " and " + max + " characters *";
inputtext.focus();
return false;
}
}