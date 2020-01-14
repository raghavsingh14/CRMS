
<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$q = $_GET['q'];
$p = $_GET['p'];
$servername = "localhost";
$username = "root";
$password = "P@sswor1";
$dbname = "crime12";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($p == "name")
{
$sql = "select c.u_id,c.criminal_name,c.most_wanted from criminal c where c.criminal_name='".$q."'";
}
elseif ($p == "crime")
{
$sql = "select c.u_id,c.criminal_name,c.most_wanted,m.crime from criminal c left join crime m on c.u_id = m.u_id where crime='".$q."'";
}
elseif($p == "most wanted"){
$sql = "select u_id,criminal_name,most_wanted from criminal where criminal_name='".$q."' and most_wanted ='y'";
}
else
{
	"select u_id,criminal_name from criminal where criminal_name='".$q."' and most_wanted='y'";
}
$result = $conn -> query($sql);
        while($row = $result->fetch_assoc()) {
    	echo "<div id ='result_elements' onclick='showUser(".$row["u_id"].")'>";
    	$sql1 = "select crime from crime where u_id='".$row["u_id"]."'";
    	$result1 = $conn -> query($sql1);
    	$row1 = $result1->fetch_assoc();
    	$n = count($row1);
    	echo "<div id ='id'>";
        echo "".$row["u_id"]."";
        echo "</div>";
        echo "<div id='name'>";
        echo "".$row["criminal_name"]."";
        echo "</div>";
        echo "<div id='mw'>";
        echo "".$row["most_wanted"]."";
        echo "</div>";
        echo "<div id='noc'>";
        echo count($row,1);
        echo "</div>";
        echo "</div></br>";
    }
$conn->close();
?>
</body>
</html> 