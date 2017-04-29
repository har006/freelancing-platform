
<html>
</head>
<title>hh</title>


<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

</head>
<body>
<div class="fut">
<div  class="w3-container">
<div>
<div class='inline'><a href="ss.php" style="text-decoration:none"><h1> The UnEmployed <sup style="font-size:8px;color:black;">TM</sup></h1></a>
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

  
  <form class="modal-content animate" action=" " method="POST">
    <div class="imgcontainer">
      <img src="https://cdn3.iconfinder.com/data/icons/medical-7/512/patient_invalid_hospital_woman_user_untiring-512.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
	 <p><span class="error">* required field.</span></p>
      <label><b>Username</b></label>
      <input  type="text1" placeholder="Enter Username" name="username" required>
  

      <label><b>Password</b></label>
      <input  type="password" placeholder="Enter Password" name="password" required>

      <button type="submit" name="submit" value="login">submit</button>
	 
      <input  type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


</div>
</body>
</html>