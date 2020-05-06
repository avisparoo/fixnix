<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL); 
include "db_connect.php";  // Connecting to db apoorva

$sql = "SELECT * FROM `basicProfile`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<br>";
    while($row = $result->fetch_assoc()) {
        echo  $row["id"]. " . " . $row["key"]. " -> " . $row["value"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

