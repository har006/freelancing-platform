<!DOCTYPE html>
<html>
</head>
<title>createprofie</title>
<head>


<style>
body {margin: 100px 20x 20px 70px;}
h1 {font-size:20px;font-family:arial;color:#f4511e;}

div.footer{

text-align:center;
position:relative;
top:-70px;


}
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
div.containe{  
              			  border: 1px solid black;
				 
				
    margin-top: 0px;
	  margin-bottom:0px;
	  margin-right:300px;
	  margin-left:300px;
text-align:center;
			 }
header{
        background-color:black;
		position:absolute;
		left:0px;
		right:0px;
				top:80px;
				 width:100%;
				height:140%;
      }
div.small{
line-height:10%;
}

input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;0
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

textarea{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 50%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit]:hover {
    background-color: #45a049;
}

input[type=submit1] {
    width: 9%;
    background-color: #4CAF50;
    color: white;
    padding: 5px 2px;
    
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit1]:hover {
    background-color: #45a049;
}



div.fut {

   
      display:inline-block;
      position:auto;
	  left:0;
	  top:0;
	  width:100%;
	  height:100%;
	  }
.button1{
            background-color:#f4511e;
			border:none;
			text-align:center;
			font-size:12px;
			padding:10px;
			width:100px;
			cursor:pointer;
			
			}
			.photo{
				position:absolute;
				top:690px;
				left:300px;
				background-color:white;
			}
			.upload{
				position:absolute;
				top:690px;
				left:910px;
				
			}
			p{
font-size:12px;
color:red;
}
input[type="text"]:invalid {
  background-color: #E00000;
}
input[type="text"]:valid {
  background-color: green;
}
				
				
	 </style>
	 </head>
<body>
<div class="fut">
<div  class="w3-container">
<div>
<div class='inline'>
<a href="ss.php" style="text-decoration:none"><h1>The UnEmployed<sup style="font-size:8px;color:black;">TM</sup></h1></a>
</div>
</div>
</div>
<div class="right"><p style="font-size:12px;color:black;">Already have an account ? <a href="ss.html"><span style="font-size:14px;color:#f4511e;">Log In</span></a></p>
</div>
</div>
<header>

<h1 style="text-align:center;color:white;">Tell Us About Yourself</h1>
<h1 style="text-align:center;font-size:15px;color:white;"><i>Few Steps And Your Own Profile Is Ready</i></h1>

<br>
<br>

<form action="createprofile1.php" id="myForm2" method="POST" name="myForm2" >
<div class="containe">
<div class="small">
<label  style="color:white;">First Name</label><br>
<input id="fname"  type="text" pattern="[A-Za-z]{1,32}" title="Enter a valid first name" placeholder="FIRST NAME"  name="first_name" required onblur="validate('first_name',this.value)"><br>

<label style="color:white;" for="lname">Last Name</label><br>
<input type="text" pattern="[A-Za-z]{1,32}" title="Enter a valid last name" placeholder="LAST NAME"id="lname" name="last_name" required ><br>



 
<label style="color:white;" for="working hours">Working Hours</label><br>
<input id="workinghours" type="text"  maxlength="2" pattern="[0-9]{1,10}" title="Enter working hours in number" placeholder="WORKING HOURS" name="working_hours" required><br>


<label style="color:white;" for="rate">Rate Of Working($/Hour)</label><br>
<input id="rate" type="text"  maxlength="3" pattern="[0-9]{1,10}" title="Enter a valid rate" placeholder="RATE"   name="rate" required onblur="validate('rate',this.value)"><br>


<label  style="color:white;">Project Done And Skills</label><br>
<textarea rows="4" cols="50"  pattern="[a-zA-Z0-9]+"  name="details" id="detail" required ></textarea><br>


<label style="color:white;" for="email">Email</label><br>
<input id="email" type="email" placeholder="EMAIL" name="email" required onblur="validate('email',this.value)"><br>


<label style="color:white;" for="number">Mobile Number</label><br>
<input id="mnum" type="text" pattern="(7|8|9)\d{9}" title="Enter a valid mobile number"  placeholder="PHONE NUMBER"  name="mobile_number" required onblur="validate('mobile_number',this.value)"><br>


<label style="color:white;" for="Country">Location</label><br>
<input id="location"  type="text" placeholder="LOCATION"  name="location" required onblur="validate('Location',this.value)"><br>



<input  type="submit" value="submit">
</div>
</div>
</form>
</header>

</body>
</html>