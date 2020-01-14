<?php
   include("config.php");
   //session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      
      $myid = mysqli_real_escape_string($db,$_GET['id']);
      $mypassword = mysqli_real_escape_string($db,$_GET['password']); 
      $type = $_GET['type'];
      $city = $_GET['city'];
      if($type == "officer"){
      		$sql = "SELECT officer_name FROM officer WHERE officer_id = '$myid' and password = '$mypassword'";
  		}
  		if($type == "station"){
      		$sql = "SELECT station_name FROM station WHERE station_id = '$myid' and password = '$mypassword'";
  		}
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myid");
        // $_SESSION['login_user'] = $myid;
         if($type == "officer"){
         header("location: officer.php");
     	}
     	if($type == "station"){
         header("location: station.php?city=".$city."&id=".$myid);
     	}
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>