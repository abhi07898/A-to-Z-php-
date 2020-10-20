
<?php
include 'config.php';
function whereclause($sql) {
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Sr no is :" . $row['sr_No'] . "name is : " . $row['name'] . " and course = : " . $row['course'] . "<br>";
        }
    }
}
?>