<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="com.css">
</head>
<body>
	<div class="container">
		<div class="navbar">
			<a href="homepage.html">Home</a>
			<div class="dropdown">
			  <button class="dropbtn">Login
				<i class="fa fa-caret-down"></i>
			  </button>
			  <div class="dropdown-content">
				<a href="slogin.php" >Police Station</a>
				<a href="ologin.php">Police Officer</a>
			  </div>
			</div>
			<a href="most_wanted.php">Most Wanted</a>
			<a href="complaint.php">Complaint</a>
			<a href="aboutus.html">About Us</a>
			<a href="" hidden id="hide">Log Out</a>
          </div>
          <div id="head2">
      <form action="" method="POST">
          <fieldset>
             <legend class="legend">Register Complaint</legend>
              <div> 
               <label for="Name">Name:</label>
               <input class="txt1" type="text" name="name" required="required"/> <br />                  
               <label>Mother's Name:<input class="txt3" type="text" name="mname"/></label><br />
               <label>Father's Name:<input class="txt4" type="text" name="nname"/></label><br />
               <label for="Phone Number">Phone Number:</label>
               <input class="txt5" type="tel" name="telephone" pattern="regexp" required="required" /><br />
               <label>Gender: 
                  <input class="txt6" type="radio" name="gender" />Male
                  <input class="txt6" type="radio" name="gender" />Female
                  <input class="txt6" type="radio" name="gender" />Others
               </label><br />
               <label  for="Address"><p class="label1">Address:</p><textarea class="txt7" name="address" cols="40" rows="4" required="required"></textarea></label><br />
               <label>Witness Name:<input class="txt8" type="text" name="wname"/></label><br />
               <label  for="Complaint"><p class="label2">Complaint:</p><textarea class="txt10" name="complaint" cols="100" rows="10" required="required"></textarea></label><br />
             </div>

             <div id="inner1">
                  <form>
                      <button  class="btn1" type="submit" formaction="xyz.html">Register</button>
                   </form>
              </div>
</fieldset>
      </form>
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
</body>
</html>