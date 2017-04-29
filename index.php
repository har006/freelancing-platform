<!DOCTYPE html>

<html>
<head>
<title>UNEMPLOYED</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

<style>
input[type=text1], input[type=password] 
{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
	border-radius:16px;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 10%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

body {margin: 100px 20x 20px 70px;}
h1 {font-size:20px;font-family:arial;color:#f4511e;}
.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.6);
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5px auto; 
    border: 1px solid #888;
    width: 90%; 
}


.close {
   
    position: absolute;
    right: 25px;
    top: 0; 
    color: #000;
    font-size: 35px;
    font-weight: bold;
}


.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}


.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}
.page-footer {
    position:relative;
	top:1000px;
    background-color: #7d7d7d;
    color: #e0e0e0;
	padding-top:64px;
	box-sizing: border-box;
	}
.page-footer.container{
max-width:100%;
}	

.page-footer.footer-sitemap{
border-top:1px solid;
margin-bottom:0px:
marhin-top:6px;
}
.row{
margin-left:-5px;
margin-right:-5px;
}

.col-e{
display:inline-block;
padding-left:5px;
padding-right:5px;
position:relative;
min:height:1px;
}
.col-f{
display:inline-block;
padding-left:100px;
padding-right:15px;
position:absolute;
min:height:1px;
}
.text-uppercase{
    text-transform: uppercase;
	font-size: 14px;
    line-height: 22px;
	font-weight: 600;
	font-family: 'Gotham';
    font-style: normal;
}

.container {
    margin-right: auto;
    margin-left: auto;
}	
div.fut {
      position:auto;
	  left:0;
	  top:0;
	  width:100%;
	  height:100%;
	  }
	  
#image {
        width:100%;
		height:auto;
}
             
div.inline {
            border-radius: 25px;     
           float:left;
		   margin: 15px;
		 }

		 
div.relative {
              position: relative;
			  top:10px;
			  
              left: 25px;
			  }
div.floating-box {
    display: inline-block;
	position: relative;
	width: 150px;
    height: 750px;
    margin: 20px;
	}	
div.fuzz {
    display: inline-block;
	position: absolute;
	width: 150px;
	top:40px;
	right:100px;
	height: 1px;
    margin: 0px;
	}
div.fat {
    display: inline-block;
	position: absolute;
	width: 150px;
	top:40px;
	right:-25px;
	height: 1px;
    margin: 0px;
	}
div.gp {
    display: inline-block;
	position: absolute;
	width: 150px;
	
	top:100px;
	right:0px;
	left:0px;
	height: 1px;
    margin: 0px;	
}
div.hk {
    display: inline-block;
	position: absolute;
	width: 150px;
	
	top:500px;
	right:1050px;
	
	height: 0px;
    margin: 0px;
}
div.rt {
    display: inline-block;
	position: absolute;
	width: 150px;
	top: 500px;
	
	right: 200px;
	height: 0px;
    margin: 0px;
}
.button {
  display: inline-block;
  border-radius: 8px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button1 {
  display: inline-block;
  border-radius: 8px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 5px;
  width: 110px;
  transition: all 0.5s;
  cursor: pointer;
  margin: -50px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 10px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
.button2 {
  display: inline-block;
  border-radius: 8px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 12px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 0px;
}

.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}
.button3 {
  display: inline-block;
  border-radius: 16px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 10px;
}

.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button3:hover span {
  padding-right: 25px;
}

.button3:hover span:after {
  opacity: 1;
  right: 0;
}
input[type=text] {
            height: 20px;
			width : 200px;
			}
div.containel{
                width:100%;
        background-color:#EDEDED;
		position:absolute;
		left:0px;
		right:0px;
				top:650px;
				 width:100%;
				height:80%;
				scroll:overflow;
                 

		 
		 }
div.h{
position:absolute;
left:10px;
}
div.small{
line-height:10%;
}		 
				
			  			  
			  
             				 

                   
</style>
</head>
<body>
<div class="fut">
<div  class="w3-container">
<div>
<div class='inline'><h1><b> The UnEmployed </b><sup style="font-size:8px;color:black;"><b>TM</b></sup></h1>
</div>
<form>
<div class="relative">
<input id="livesearch" type="text" onkeyup="showResult(this.value)" name="search" placeholder="serach..">
</form>
<div class="floating-box">
<button class="button" style="vertical-align:middle"><span>Browse</span>
</div>
<button class="button1" style="vertical-align:middle"><span>How It Works</span>
</div>
<div class="fuzz">
<button class="button2" onclick="window.location.href='signuppage.php'" style="vertical-align:middle"><span>SignIn</span>


</div>
<div class="fat">
<button class="button2" onclick="document.getElementById('id01').style.display='block'" style="vertical-align:middle"><span>Login</span></button>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

  
  <form class="modal-content animate" action="action_page4.php" method="Post">
    <div class="imgcontainer">
      <img src="https://cdn3.iconfinder.com/data/icons/medical-7/512/patient_invalid_hospital_woman_user_untiring-512.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	 <p><span class="error">* required field.</span></p>
      <label><b>Username</b></label>
      <input  type="text1" placeholder="Enter Username" name="uname" required>
  

      <label><b>Password</b></label>
      <input  type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button>
	 
      <input  type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</div>
<div id="fut">
<div class="gp">
<img src="https://web3canvas.com/wp-content/uploads/2014/02/picjumbo-high-quality-hd-banner-images-stock-photos-free-laptop-man-hand-download.jpg" alt="Norway" width="1350" height="500">
</div>
</div>
<div class="w3-container">
<div class="hk">
<button class="button3"  onclick="window.location.href='hire1.html'" style="vertical-align:middle"><span>Hire</span>
</div>
<div class="rt">
<button class="button3" style="vertical-align:middle"><span>Work</span>
</div>
</div>
</div>
</div>
<div class="containel">
<br>
<div class="small">

<p style="font-size:30px;color:black;text-align:center"><b> Wondering! How the<span> UNEMPLOYED Works ?</span></b> </p>
</div>
<div class="h">
<iframe style="border:none" width="620" height="300"
src="https://www.youtube.com/embed/XGSy3_Czz8k?autoplay=1">
</iframe>
</div>
</div>
<section class="page-footer">
<div class="container">
<div class="map-footer">
<div class="row">
<div class="col-e">
<div ui-accordion class="item">
<h4 class="text upper">Company Info</h4>
<ul class="list">
<li>About Us</li>
<li>Carrers</li>
<li>Terms of Service</li>
<li>Privacy Policy</li>
<li>Trust and Safety</li>
</ul>
</div>
</div>
<div class="col-f">
<div ui-accordion class="item">
<h4 class="text upper">Connect With Us</h4>
<ul class="list">
<li>Connect & Support</li>
<li>Help</li>
<li>Email</li>
</ul>
</div>
</div>
</div>
</div>


</div>
</section>
<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>



<script>
function showResult(str) {
  if (str.length==0) { 
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="10px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>


</body>
</html>