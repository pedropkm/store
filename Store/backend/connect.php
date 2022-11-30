
<?php
// Storing our mysqli class parameters in variables
$servername = "sql8.freesqldatabase.com";
$username = "sql8535442";
$password = "lkiSj26XzC";
$dbname = "sql8535442";

// Using the above variables as parameter values
$conn = new mysqli($servername, $username, $password, $dbname); // Create connection

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>