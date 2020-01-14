
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = $_GET['q'];
$p = $_GET['p'];
$type = $_GET['type'];

$servername = "localhost";
$username = "root";
$password = "P@sswor1";
$dbname = "crime12";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($type == "officer")
{
    $sql = "select officer_name from officer where officer_id='".$q."' and officer_pass='".$p."'";
}
else
{
    $sql = "select officer_name from station where station_id='".$q."' and password='".$p."'";
}
$result = $conn -> query($sql);
       if($result->num_rows == 1)
       {
        echo "true";
       }
       else
       {
        echo "false";
       }
$conn->close();
?>
</body>
</html> 