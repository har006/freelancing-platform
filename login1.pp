<?php include "database.php" ?>
<?php>
$username = $_POST["user_name"];
$password = $_POST["password"];
mysqli_query($connect,"INSERT INTO user(username,password) VALUES('$user_name','$password')");
?>
