<?php include 'databse.php';?>
 
<?php
 
// create a variable
 $image = $_FILES['upload']['tmp_name'];
    $img = file_get_contents($image);
//Execute the query
 
mysqli_query($connect," INSERT INTO image (image)
				VALUES('$img')");
 if(mysqli_affected_rows($connect)>0) {
	echo "<p>Succesfully uploaded</p>";
	echo "<a href=\"ss.php\">Go Back</a>";
} else {
	echo "Not Uploaded<br />";
	echo mysqli_error ($connect);
}
?>