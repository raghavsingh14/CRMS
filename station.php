<?php
$city = $_GET['city'];
$s_id = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>station</title>
	<link rel="stylesheet" href="station_styles.css">
	<script src="ajax2.js" type="text/javascript"></script>
	<script>
		var val1 = "<?php echo $city ?>";
		var val2 = "<?php echo $s_id ?>";
	</script>
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
</div>
<div id="search">
	<form id = "1" >
		Search By:
		<select id='4'>
			<option value="name">Name</option>
  			<option value="crime">Crime</option>
  			<option value="station">Station</option>
  			<option value="most wanted">Most wanted</option>
		</select>
		<input type="text" id= "2" class="srch">
		<button type="button" onclick="showUser1(document.getElementById('2').value,document.getElementById('4').value,val1,val2)">search</button>
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
</body>
</html>