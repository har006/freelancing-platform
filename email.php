<html>
</head>
<title>signuppage</title>
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
.container{
                width:100%;
				
}
header{
        background-color:black;
		position:absolute;
		left:0px;
		right:0px;
				top:80px;
				 width:100%;
				height:70%;
                 

		 
		 }
div.small{
line-height:10%;
}
.left-col {
  position:absolute;
  top:190px;
  text-align:center;
  width: 50%;
  min-height: 200px;
  border-right: 1px solid #f4511e;
  float: left;
  box-sizing: border-box;
}

.right-col {
position:relative;
top:50px;
text-align:center;
  width: 50%;
  min-height: 200px;
  float: right;
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
			input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;0
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
<header>

<br>
<br>
<div class="small">

<p style="font-size:30px;color:#f4511e;text-align:center;"></p>
<p style="font-size:30px;color:#f4511e;font-family:Comic Sans;text-align:center;">Enter Your Registered Email</p><br>
<label style="color:white;" for="email">Email</label><br><br><br>
<form action="password.php" method="POST">
<input id="email" type="email" placeholder="EMAIL" name="email" required onblur="validate('email',this.value)"><br>
<button   style="text-align:center" class="button1"  name="forgot-password" type="submit" value="submit">Submit</button> 
</div>
</form>
</header>
</div>
</body>
</html>