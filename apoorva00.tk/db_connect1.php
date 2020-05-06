
<?php
$servername = "52.207.239.126";
//"interns.fixnix.info";
$username = "root";
$password = "apoorva";
//"Admin1234#@";
$dbname = "apoorva";
/*$mysqli = mysqli_init();
if (!$mysqli) {
  die("mysqli_init failed");
}

// Specify connection timeout
$conn -> options(MYSQLI_OPT_CONNECT_TIMEOUT, 3600);

// Specify read options from named file instead of my.cnf
//$conn -> options(MYSQLI_READ_DEFAULT_FILE, "myfile.cnf");

$conn -> real_connect($servername,$username,$password,$dbname);
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
