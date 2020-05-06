<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
include "db_connect1.php";  // Connecting to db apoorva

$sql = "SELECT id, user, pass FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br>";
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " | Name: " . $row["user"]. " | Pass:" . $row["pass"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

