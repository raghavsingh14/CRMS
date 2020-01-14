<!DOCTYPE html>
<html>
<head>
	<title>most wanted</title>
	<link rel="stylesheet" href="mostwanted_styles.css">
<script src="ajax3.js" type="text/javascript"></script>
</head>
<body>
<div class="navbar">
			<a href="homepage.html">Home</a>
			<div class="dropdown">
			  <button class="dropbtn">Login
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-content">
				<a href="station.html">Police Station</a>
				<a href="officer.php">Police Officer</a>
			  </div>
			</div>
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
			<img src="logo1.png">
	</div>
</div>
<div id ="result_main">
		<div id="r_heading">
			<div id="r_id">
				ID
			</div>
			<div id = "r_name">
				NAME
			</div>
			<div id="r_mw">
				MOST WANTED
			</div>
			<div id = "r_ncs">
				No. of Crimes
			</div>
		</div>
<div id="result">
	<?php include'most_wanted_results.php'?>
</div>
</div>
<div id="response_main">
	<div id ="criminal_image">
				
	</div>
	<div id="response">

	</div>
</div>
</body>
</html>