<?php include 'databse.php';?>
 
<?php
 
// create a variable
$company_name=$_POST['company_name'];
$name=$_POST['name'];
$completion_time=$_POST['completion_time'];
$budget=$_POST['budget'];
$details=$_POST['details'];
$email=$_POST['email'];
$mobile_number=$_POST['mobile_number'];
$country=$_POST['country'];
 
//Execute the query
 
mysqli_query($connect," INSERT INTO postproject (Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Project_Details,Email,Mobile_Number,Country)
				VALUES('$company_name','$name','$completion_time','$budget','$details','$email','$mobile_number','$country')");
 if(mysqli_affected_rows($connect)>0) {
	echo "<p>Succesfully posted Your Project</p>";
	echo "<a href=\"ss.php\">Go Back</a>";
} else {
	echo "Employee NOT Added<br />";
	echo mysqli_error ($connect);
}
?>