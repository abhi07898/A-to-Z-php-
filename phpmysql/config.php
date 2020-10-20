
<?php
$server_name = '127.0.0.1:1306';
$db_user_name = 'root';
$db_password = 'admin';
$db_name = 'task_1';

$conn = new mysqli($server_name, $db_user_name, $db_password, $db_name);
// check teh connection
if ($conn->connect_error) {
    die("COnnection Failed due to the reason of : " . $conn->connect_error);
} else {
    
}
?>
