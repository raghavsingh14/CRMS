<?php include'login_script.php'?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="login_style.css">
	 <script src="loginscript.js"></script> 
	
</head>
<body>
<div class="navbar">
		<a href="homepage.html">Home</a>
		<a href="most_wanted.php">Most Wanted</a>
		<a href="complaint.php">Complaint</a>
		<a href="aboutus.html">About Us</a>
		<a href="" hidden id="hide">Log Out</a>
	  </div>
	<div id="p1">
	</div>
	<div id="p2">
	</div>
	<div id="p3">
	</div>
	<div id="p4">
	</div>
	<div id="p5">
	</div>
	<div id="p6">
	</div>
	<div id="p7">
	</div>
	<div id="stage">
		<div id="spinner">
			<img src="logo1.png">
		</div>
	</div>
	<div id="loginforms">


		<!-- Tab content -->

		<div id="station"   >
			<form action='' method="GET">
            <p class="logcont1">POLICE STATION LOGIN</p>
  			<p class="logcont2">Station City:
  			<input class="city" required name ="city">
  			<input name ="type" value="station" hidden></p>
  			<br>
  			<p class="logcont2">Station Id:
  				<input class="id" type="text" name="id" required></p>
  				<br>
  				<p class="logcont2">Password:
  				<input class="pass" type="password" name="password" required></p>
  				<br>
  			<p class="logcont1"><input type="submit" class="button" value="Login"></p>
			</form>
		</div>

			</div>

</body>
</html>