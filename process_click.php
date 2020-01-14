
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "P@sswor1";
$dbname = "crime12";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select img_url,criminal_name,father_name,address,station_id,officer_id from criminal where u_id='".$q."'";
$result = $conn -> query($sql);
        $row = $result->fetch_assoc();
        echo "<div id = 'criminal_image'>";
        echo "<img src =".$row["img_url"]." height=205 width=240>";
        echo "</div>";
        echo "<div id = 'response'>";
        echo "Name :".$row["criminal_name"]. "<br> Father: " . $row["father_name"]."<br> Address: " . $row["address"]. "<br>Station ID:".$row["station_id"]. "<br> Officer ID: ".$row["officer_id"]. "<br>";
$sql1  = "select crime from crime where u_id='".$q."'";
$result1 = $conn->query($sql1);
echo "Crimes :";
while($row1 = $result1->fetch_assoc()){
    echo "".$row1["crime"]."<br>";
}
echo "</div>";
$conn->close();
?>
</body>
</html> 