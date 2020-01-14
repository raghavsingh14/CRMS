<!DOCTYPE html>
<html>
<head>
	<title>officer</title>
	<link rel="stylesheet" href="officer_styles.css">
	<script src="ajax1.js" type="text/javascript"></script>
</head>
<body>
<div class="container">
    <div class="navbar">
		<a href="homepage.html">Home</a>
		<a href="most_wanted.php">Most Wanted</a>
		<a href="complaint.php">Complaint</a>
		<a href="aboutus.html">About Us</a>
		<a href="" hidden id="hide">Log Out</a>
	  </div>
 <!--<div class="btn">
     <button id="btn1" type="button" >Insert Criminal</button>
     <button id="btn1" type="button" >Delete Criminal</button>
 </div>-->
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
 <div id="search">
	<form id = "1" >
		Search By:
		<select id='4'>
			<option value="name">name</option>
  			<option value="crime">crime</option>
  			<option value="station">station</option>
  			<option value="most wanted">most wanted</option>
		</select>
		 <input type="text" id= "2" class="srch">
		<button type="button" onclick="showUser1(document.getElementById('2').value,document.getElementById('4').value)">search</button>
	</form>
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
		<div id = "result">
		</div>
	</div>
	<div id="response_main">
	<div id ="criminal_image">
				
	</div>
	<div id="response">

	</div>

  </div>
</div>
</body>
</html>