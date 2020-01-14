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
		<a href="">News</a>
		<a href="most_wanted.php">Most Wanted</a>
		<a href="#news">Complaint</a>
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

		<div class="tab">
  		<button class="tablinks" onclick="openCity(event, 'officer')">OFFICER</button>
  		<button class="tablinks" onclick="openCity(event, 'station')">STATION</button>
		</div>

		<!-- Tab content -->
		<div id="officer" class="tabcontent">
  			<form action='' method="GET">
  				User id:
  				<input type="text" name="id" required>
  				<br>
  				Password:
  				<input type="password" name="password" required>
  				<input name ="type" value="officer" hidden>
  				<input required name ="city" value="none" hidden>
  				<br>
  				<input type="submit" class="button" value="Login">
			</form>
		</div>

		<div id="station" class="tabcontent">
			<form action='' method="GET">
  			City:
  			<input required name ="city">
  			<input name ="type" value="station" hidden>
  			<br>
  			station id:
  				<input type="text" name="id" required>
  				<br>
  				Password:
  				<input type="password" name="password" required>
  				<br>
  			<input type="submit" class="button" value="Login">
			</form>
		</div>

			</div>

</body>
</html>