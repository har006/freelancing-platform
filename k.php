<!DOCTYPE html>
<html>
<head>
<title>k</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {margin: 100px 20x 20px 70px;}
h1 {font-size:20px;font-family:arial;color:#f4511e;}
div.fut {

   
      display:inline-block;
      position:auto;
	  left:0;
	  top:0;
	  width:100%;
	  height:100%;
	  }
	  div.right {

padding-right:0%;     
margin:30px;		 
text-align: right;
}
div.inline {
            border-radius: 25px;     
           float:left;
		   margin: 15px;
		 }
		 h1 {font-size:20px;font-family:arial;color:#f4511e;}
		 div.inline {
            border-radius: 25px;     
           float:left;
		   margin: 15px;
		 }
		 div.right {

padding-right:0%;     
margin:30px;		 
text-align: right;
}







.menu	{
	height: 400px; // hide the scroll bar
	background: #f3f3f3;
	box-sizing: border-box;
	
	white-space: nowrap;
	overflow-x: auto;
	overflow-y: hidden;
	-webkit-overflow-scrolling: touch;
}
	
	.item {
	
		display: inline-block;
		width: 100px;
		height: 100%;
		
		padding: 10em;
		box-sizing: border-box;
	}


	
	
	.pos{
	position:relative;
	width:300px;
	top:-150px;
	left:-170px;
	
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  height:300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.container56 {
	
  padding: 0 16px;
}

.container56::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
  font-size: 18px;
}

.bur {
	position:relative;
	top:50px;
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.pos1{
	position:relative;
	width:300px;
	left:-160px;
	top:-150px;
}
.pos2{
	position:relative;
	width:300px;
	left:-150px;
	top:-150px;
}
.pos3{
	position:relative;
	width:300px;
	left:-140px;
	top:-150px;
}
.pos4{
	position:relative;
	width:300px;
	left:-130px;
	top:-150px;
}
.pos5{
	position:relative;
	width:300px;
	left:-130px;
	top:-150px;
}
.buttonpost
{position:absolute;
top:680px;
	 background-color:#f4511e;
    border: none;
    color: white;
    padding: 10px 25px;
    left:150px;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    
    cursor: pointer;
	width:75%;
	
}
.right1{
	font-size:12px;
    float:left;
}

.left{
font-size:12px;
    float:right;
}

</style>
</head>


<body>



<div class="fut">
<div  class="w3-container">
<div>
<div class='inline'><a href="ss.php" style="text-decoration:none"><h1> The UnEmployed <sup style="font-size:8px;color:black;">TM</sup></h1></a>
</div>
</div>
</div>
<div class="right"><p style="font-size:12px;color:black;">Already have an account ? <a href="s.html"><span style="font-size:14px;color:#f4511e;">Log In</span></a></p>
</div>
</div>
<div>
<p style="color:black;text-align:center;font-size:28px;"><b>Looking For Your First Project</b><br>
<span style="color:black;text-align:center;font-size:20px;"><b>Find It Here</b></span></p>
</div>


<ul class="menu">

		<li class="item">
		<div class="pos">
        <div   class="card">
        <div class="container56">
         <h1><?php
include 'databse.php';
  
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHere id='5'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Project_Name"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></h1>
      <p>  <span class="right1">Company/Indiviual Name</span><span class="left">
	  <?php
include 'databse.php';

$sql = "SELECT Company_Name_or_Indiviual_Name,Completion_Time,Budget,Country FROM postproject WHERE id='5'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Company_Name_or_Indiviual_Name"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?>

</span>​</p>
        <p> <span class="right1">Completion Time</span><span class="left">
		<?php
include 'databse.php';
 
$sql = "SELECT Company_Name_or_Indiviual_Name,Completion_Time,Budget,Country FROM postproject WHERE id='5'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Completion_Time"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?>
		</span>​</p>
		<p> <span class="right1">Budjet</span><span class="left">
		<?php
include 'databse.php';
 
$sql = "SELECT Company_Name_or_Indiviual_Name,Completion_Time,Budget,Country FROM postproject WHERE id='5'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Budget"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Location</span><span class="left">
		<?php
include 'databse.php';
 
$sql = "SELECT Company_Name_or_Indiviual_Name,Completion_Time,Budget,Country FROM postproject WHERE id='5'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Country"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
		  </div>
		  </div>
		  </div>
</li><!--
--><li class="item">
<div class="pos1">
<div class="card">

  <div class="container56">
    <h1><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=6";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Project_Name"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Company/Indiviual Name</span><span class="left">
	<?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=6  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Company_Name_or_Indiviual_Name"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Completion Time</span><span class="left">
		<?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=6  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Completion_Time"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Budjet</span><span class="left">
		<?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=6  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Budget"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Location</span><span class="left">
		<?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=6  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Country"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>

   
  
  </div>
</div>
</div></li><!--
--><li class="item">
<div class="pos2">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=7  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Project_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Company/Indiviual Name</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=7  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Company_Name_or_Indiviual_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Completion Time</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=7  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Completion_Time"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Budjet</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=7  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Budget"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=7  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Country"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div>
</div></li><!--
--><li class="item">
<div class="pos3">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=8  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Project_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p><span class="right1">Company/Indiviual Name</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=8";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Company_Name_or_Indiviual_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Completion Time</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=8  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Completion_Time"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Budjet</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=8 ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Budget"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=8  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Country"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		 <p><button class="bur">Show Details</button></p>
  </div>
</div></li>
--><li class="item">
<div class="pos4">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=9 ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Project_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
     <p>  <span class="right1">Company/Indiviual Name</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=9  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Company_Name_or_Indiviual_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Completion Time</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=9  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Completion_Time"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Budjet</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=9  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Budget"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=9 ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Country"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div></li><!--
--><li class="item">
<div class="pos5">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=23 ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Project_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Company/Indiviual Name</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=23 ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Company_Name_or_Indiviual_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Completion Time</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=23  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Completion_Time"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Budjet</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=23  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Budget"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT Company_Name_or_Indiviual_Name,Project_Name,Completion_Time,Budget,Country FROM postproject WHERE id=23  ";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Country"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div></li>
	</ul>

	
<p style="font-size:28px;text-align:center;"><b>Still Not Hired<b><br></p>

<button style="color:black;" onclick="window.location.href='createprofile.php'"class="buttonpost">Create Profile</button><br>
<div>
<p style="font-size:28px;text-align:center;"><b>And You Are Ready To Go<b></p>
</body>
</html>
