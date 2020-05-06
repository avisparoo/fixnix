<?php
$servername = "localhost";
//"interns.fixnix.info";
$username = "root";
$password = "apoorva";
//"Admin1234#@";
$dbname = "apoorva";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
