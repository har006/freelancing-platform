<?php
$value = $_POST['query'];
$formfield = $_POST['field'];
// Check Valid or Invalid user name when user enters user name in username input field.
if ($formfield == "fname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
if ($formfield == "lname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
if ($formfield == "uname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid password when user enters password in password input field.
if ($formfield == "pass1") {
if (strlen($value) < 6) {
echo "Password too short";
} else {
echo "<span>Strong</span>";
}
}
if ($formfield == "cname") {
if (strlen($value) < 4) {
echo "Must be 3+ letters";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid email when user enters email in email input field.
if ($formfield == "email1") {
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $value)) {
echo "Invalid email";
} else {
echo "<span>Valid</span>";
}
}
// Check Valid or Invalid website address when user enters website address in website input field.
if ($formfield == "mname") {
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $value)) {
echo "Invalid website";
} else {
echo "<span>Valid</span>";
}
}
?>