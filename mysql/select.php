
<?php
include('config.php');
$query = "Select sr_No, name, course from test";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Sr no is :" . $row['sr_No'] . "name is : " . $row['name'] . " and course = : " . $row['course'] ."<br>";
    }
}
?>