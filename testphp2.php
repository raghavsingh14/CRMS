 <!DOCTYPE html>
 <head>
</head>
<body>
 <?php
$servername = "localhost";
$username = "root";
$password = "P@sswor1";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
</body>
</html>