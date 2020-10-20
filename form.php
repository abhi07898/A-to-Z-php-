
<?php

if (isset($_POST['submit'])) {
    $name_error = $course_error = $duration_error = $email_error = '';
    $name = $course = $duration = $email = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            $name_error = "name field is required";
        } else {
            $name = $_POST['name'];
        }
        if (empty($_POST['course'])) {
            $course_error = "course  filed is required";
        } else {
            $course = $_POST['course'];
        }
        if (empty($_POST['duration'])) {
            $duration_error = "duration files id required";
        } else {
            $duration = $_POST['duration'];
        }
        if (empty($_POST['email'])) {
            $email_error = "email field is required";
        } else {
            $email = $_POST['email'];
        }
    }
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
}
?>
<html>
<head>
<title>php forms with validation </title>
</head>
<body>
    <form action=" <?php echo $_SERVER['PHP_SELF']; ?>", method="post">
    <label for="name">Name :</label>
    <input type="text" name='name' value = <?php echo $name; ?>><span><?php echo $name_error; ?> </span><br><br>
    <label for="course">Course :</label>
    <input type="text" name='course'><span><?php echo $course_error; ?> </span><br><br>
    <label for="duration">Duration :</label>
    <input type="text" name='duration'><span> <?php echo $duration_error; ?></span><br><br>
    <label for="email">E-mail :</label>
    <input type="text" name='email'><span><?php echo $email_error; ?> </span><br><br>
    <input type="submit" name='submit'>
    </form>
</body>

</html>