<?php include 'databse.php';?>
 
<?php
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$user_name=$_POST['user_name'];
$password=$_POST['password1'];
$company_name=$_POST['company_name'];
$email=$_POST['email'];
$mobile_number=$_POST['mobile_number'];
$country=$_POST['country'];
 
//Execute the query
 
mysqli_query($connect," INSERT INTO signup (first_name,last_name,user_name,password,company_name,email,Mobile_Number,country)
				VALUES('$first_name','$last_name','$user_name','$password','$company_name','$email','$mobile_number','$country')");
 if(mysqli_affected_rows($connect)>0) {
	echo "<p>Employee Added</p>";
	echo "<a href=\"ss.php\">Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
?>
