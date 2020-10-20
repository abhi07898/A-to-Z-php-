
<?php

$name = $password = $repassword = $email = '';
$error = array();
$name_err = $password_err = $repassword_err = $email_err = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['signup'])) {
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
        if (empty($_POST['repassword'])) {
            $repassword_err = "RE_PASSWORD is Required field";
        } else {
            $repassword = $_POST['repassword'];
        }
        if (empty($_POST['email'])) {
            $email_err = "email is Required field";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === true) {
            $email_err = "enter valid email";
        } else {
            $email = $_POST['email'];
        }

        if ($name_err == '' and  $password_err == '' and $repassword_err == '' and  $email_err == '') {
            if ($password !== $repassword) {
                $password_err = "password does not matched";
                $error[] = array('input' => 'password', 'msg' => "password did not matched ");
            } else {
                $sql = "SELECT USER_NAME, E_MAIL FROM signup_details";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        if ($row['USER_NAME'] === $name) {
                             
                             $error[] = array('input' => 'username', 'msg' => 'this name is already registered');
                        } elseif ($row['E_MAIL'] === $email) {
                        
                            $error[] = array('input' => 'email', 'msg' => 'this email is already registered');
                        }
                    }
                }
                if (sizeof($error) == 0) {
                            $sql = "INSERT INTO signup_details (`USER_NAME`, `PASSWORD`, `E_MAIL`) 
                                        VALUES ('" . $name .   "', '" . $password .   "', '" . $email .   "')";

                    if ($conn->query($sql) === true) {
                            echo "New record created successfully";
                    } else {
                    
                            
                        
                        $error[] = array('input' => 'form', 'msg' => $conn->error);
                    }
                    $conn ->close();
                }
            }
        }
    }
}
?>