<?php include 'databse.php';?>
 
<?php
 
// create a variable
$first_name=$_POST['firstname'];
$last_name=$_POST['Lastname'];
$user_name=$_POST['user_name'];
$password=$_POST['password1'];

$email=$_POST['email'];
$mobile_number=$_POST['phone_number'];
$country=$_POST['Country'];
 
//Execute the query
 
mysqli_query($connect," INSERT INTO work (First_Name,Last_Name,User_Name,Paassword,Email,Phone_Number,Country)
				VALUES('$first_name','$last_name','$user_name','$password','$email','$mobile_number','$country')");
 if(mysqli_affected_rows($connect)>0) {
	echo "<p>Employee Added</p>";
	echo "<a href=\"ss.php\">Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
?>