<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connect = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("mysimplephp", $connect);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select user_name from signup where user_name='$user_check'", $connect);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
	
mysql_close($connect); // Closing Connection
header('Location:k.php'); // Redirecting To Home Page
}
?>