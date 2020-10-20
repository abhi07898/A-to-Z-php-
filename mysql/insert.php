
<?php
include('config.php');
$query = 'insert into test(`name`, `course`, `address`, `content`)values("Abhishek","MCA", "mau nath bhanjan", "JAva +PYTHON WITH ML"),
("Abhishek","MCA", "mau nath bhanjan", "JAva +PYTHON WITH ML"),
("Abhishek","MCA", "mau nath bhanjan", "JAva +PYTHON WITH ML"),
("Abhishek","MCA", "mau nath bhanjan", "JAva +PYTHON WITH ML")';
if ($conn->query($query) === true) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?> 

