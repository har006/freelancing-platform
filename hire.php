
<!DOCTYPE html>
<html>
</head>
<title>hire</title>
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
				height:100%;
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

<h1 style="text-align:center;color:white;">Create an Client Account</h1>
<h1 style="text-align:center;font-size:15px;color:white;">Sign Up As <a style="color:#f4511e" href="work.php">Freelancer</a></h1>

<br>
<br>

<form action="signup2.php" id="myForm" method="POST" name="myForm">

<div class="containe">
<div class="small">
<label  style="color:white;"><b>First Name</b></label><br>
<input id="fname"  type="text"  pattern="[A-Za-z]{1,32}" title="Enter Valid First Name" placeholder="FIRST NAME"  name="first_name" required ><br>
<label style="color:white;" for="lname">Last Name</label><br>
<input id="lname" type="text" pattern="[A-Za-z]{1,32}" title="Enter a valid Last Name"  placeholder="LAST NAME" name="last_name" required><br>
<label style="color:white;" for="username">User Name</label><br>
<input id="uname" type="text"   pattern="[a-zA-Z0-9]+"  title="Enter Valid Username"  placeholder="User Name" name="user_name" required ><br>
<label style="color:white;" for="password">Password</label><br>
<input id="password" type="password" placeholder="Password" name="password1"  required><br>
<label style="color:white;" for="cname">Company Name</label><br>
<input id="cname" type="text"  pattern="[A-Za-z]{1,32}" title="Enter a valid First Name" placeholder="COMPANY NAME"   name="company_name" required ><br>
<label style="color:white;" for="email">Email</label><br>
<input id="email1" type="email" placeholder="EMAIL" name="email" required><br>
<label style="color:white;" for="number">Mobile Number</label><br>
<input id="mnum" type="text"  pattern="(7|8|9)\d{9}" title="Enter a valid mobile number"  placeholder="PHONE NUMBER"  name="mobile_number" required ><br>
<label style="color:white;" for="Country">Country</label><br>
<select id="Country1" placeholder="COUNTRY" name="country" required >
<option value="India">India</option>
<option value="Pakistan">Pakistan</option>
<option value="America">America</option>
</select>
<input  type="submit" value="submit">
</div>
</div>
</form>
</header>

</body>
</html>