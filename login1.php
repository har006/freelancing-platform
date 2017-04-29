<?php


if(isset($_POST['submit']))
{
	
	
	
		$username=$_POST['user_name'];
		$password=$_POST['password1'];
		$connect=mysql_connect('localhost','root','','mysimplephp');
		
		$username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
		
		$db = mysql_select_db("mysimplephp", $connect);
		$query = mysql_query("select * from signup where password='$password' AND user_name='$username'", $connect);
$rows = mysql_num_rows($query);
if ($rows == 1) {

header('location:ss.php'); // Redirecting To Other Page
}
else{
	header('Location:p.php');
}
mysql_close($connect); // Closing Connection


}
?>
		