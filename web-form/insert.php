<?php
include 'config.php';
if (isset($_POST['submitbtn'])) {
    $name = $_POST['name'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $fees = $_POST['fees'];

    //print_r($_POST);
    $sql = "INSERT INTO student_detail (name, class , email, fees)
    VALUES ('$name', '$class', '$email', '$fees')";

    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('location:form.php');
 }
?>
<table>
    <tr>
        <td>SR_No</td>
        <td>Name</td>
        <td>class</td>
        <td>Email</td>
        <td>Fees</td>
    </tr>

<?php

    if (isset($_POST['fatched'])) {
        $sql = "SELECT id, name, class, email, fees FROM student_detail";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
          // output data of each row
            echo "<tr>";
            while ($row = $result->fetch_assoc()) {
                 echo "<td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td> " . $row["class"] . " </td><td>" . $row["email"] . " </td><td>" . $row["fees"] . "</td></tr>";
            }
        } else {
             echo "0 results";
        }
    }



?>
</table>