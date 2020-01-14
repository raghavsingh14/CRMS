<?php
$servername = "localhost";
$username = "root";
$password = "P@sswor1";
$dbname = "crime12";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql2 = "select u_id,criminal_name,most_wanted,total_crime from criminal where most_wanted ='YES'";

$result = $conn -> query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	echo '<div id ="result_elements" onclick="showUser('.$row["u_id"].')">';
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
        echo "".$row["total_crime"]."";
        echo "</div>";
        echo "</div></br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 