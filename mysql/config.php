
<?php
$servername = '127.0.0.1:1306';
$username = 'root';
$password = 'admin';
$dbname = 'testt';
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} echo "Connected successfully";
?>
