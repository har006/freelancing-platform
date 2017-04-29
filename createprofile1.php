<?php include 'databse.php';?>
 
<?php
 
// create a variable
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$workinghours=$_POST['working_hours'];
$rate=$_POST['rate'];
$details=$_POST['details'];
$email=$_POST['email'];
$mobile_number=$_POST['mobile_number'];
$location=$_POST['location'];

 
//Execute the query
 
mysqli_query($connect," INSERT INTO createprofile (First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location)
				VALUES('$first_name','$last_name','$workinghours','$rate','$details','$email','$mobile_number','$location')");
 if(mysqli_affected_rows($connect)>0) {
	echo "<p>Succesfully created your profile</p>";
	echo "<a href=\"ss.php\">Go Back</a>";
} else {
	echo "profile not created try again<br />";
	echo mysqli_error ($connect);
}
?>