<?php
function connect_db() {
 $servername = "localhost";
 // EDIT HERE YOUR USERNAME AND PASSWORD
 $username = "a1602703";
 $password = "toFYYu77c";
 $dbname = "a1602703";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>

