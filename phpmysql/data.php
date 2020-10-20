
<?php
session_start();
include('config.php');
$error = array();

$error = array();
$name =  $password = '';
$name_err = $password_err = '';


if (isset($_POST['login'])) {
    if (empty($_POST['username'])) {
        $name_err = "USER NAME is Required field";
    } else {
        $name = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $password_err = "PASSWORD is Required field";
    } else {
        $password = $_POST['password'];
    }
    if ($name_err == '' and $password_err == '') {
        if (sizeof($error) == 0) {
                $sql = "SELECT * from signup_details WHERE  `USER_NAME` = '" . $name . "' AND `PASSWORD` = '" . $password . "'";
                $result = $conn->query($sql);
                //echo $sql;
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                                $_SESSION['username'] = $name;
                                header('location:members/index.php');
                }
            } else {
                        $error[] = array('input' => 'form', 'msg' => 'Invalid Entered Detail');
            }
        }
    }
    $conn->close();
}
?>