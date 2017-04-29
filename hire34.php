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
ul.ty {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li.t {
    float: left;
}

li.t a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li.t a:hover {
    background-color: #111;
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
<br><br>
<ul class="ty">

  <li class="t"><a class="active" href="#home">Graphic designer</a></li>
  <li class="t"><a href="#news">Writers</a></li>
  <li class="t"><a href="#contact">Accountants</a></li>
  <li class="t"><a href="#about">Legal</a></li>
   <li class="t"><a href="#about">Virtual Assistance</a></li>
    <li class="t"><a href="#about">Programmers</a></li>
	 <li class="t"><a href="#about">Artists</a></li>
	  <li class="t"><a href="#about">Legal</a></li>
	   <li class="t"><a href="#about">Web Designers</a></li>
	    <li class="t"><a href="#about">Fasion Designers</a></li>
		 <li class="t" style="float:right"><a href="#about">See More</a></li>
		 
</ul>
<br><br><br><br>
<ul class="menu">

		<li class="item">
		<div class="pos">
        <div   class="card">
        <div class="container56">
         <h1>
		 <?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='18'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"].$row["Last_Name"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?>

	</h1>
	
      <p>  <span class="right1">Rate Of Working</span><span class="left">
	  <?php
include 'databse.php';

$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='18'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?>

</span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left">
		<?php
include 'databse.php';
 
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='18'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?>
		</span></p><br>
		<p> <span class="right1">Location</span><span class="left">
		<?php
include 'databse.php';
 
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='18'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
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
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='19'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Rate Of Working</span><span class="left">
	<?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='19'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left">
		<?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='19'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "0 results";
}
$connect->close();
?></span>​</p>
		
		<p> <span class="right1">Location</span><span class="left">
		<?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='19'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
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
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='20'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Rate of Working</span><span class="left"><?php
include 'databse.php';
  $last_id = $connect->insert_id;
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='20'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='20'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='20'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
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
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='21'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Rate of Working</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='21'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='21'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='21'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div>
</div></li>
<li class="item">
<div class="pos4">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='22'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Rate of Working</span><span class="left"><?php
include 'databse.php';
 
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='22'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='22'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='22'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div>
</div></li>
<li class="item">
<div class="pos3">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='23'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Rate of Working</span><span class="left"><?php
include 'databse.php';
 
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='23'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='23'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='23'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div>
</div></li>
<li class="item">
<div class="pos5">
<div class="card">

  <div class="container56">
     <div class="container56">
    <h1><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='24'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["First_Name"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></h1>
    <p>  <span class="right1">Rate of Working</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='24'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["rate"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
        <p> <span class="right1">Working Hours</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='24'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["working_hours"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		
		<p> <span class="right1">Location</span><span class="left"><?php
include 'databse.php';
  
$sql = "SELECT First_Name,Last_Name,working_hours,rate,Project_Done,Email,Mobile_Number,Location FROM createprofile WHere id='24'";
$result = $connect->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "" . $row["Location"]."<br>";
    }
} else {
    echo "Add Details";
}
$connect->close();
?></span>​</p>
		  <p><button class="bur">Show Details</button></p>
  </div>
</div>
</div></li>
	</ul>

</div>
</body>
</html>