
<html>
<head>
<title>form value fatching </title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>", method="post">
    <label for="name">Name</label>
    <input type="text" name="fname"><br>
    <label for="mobile">mobile</label>
    <input type="text" name="mobile"><br>
    <input type="submit"  name="submit">
    </form>

<?php
if (isset($_POST['submit'])) {
    /**echo "<pre>";
    print_r($_POST);
    echo "</pre>";*/
    $_name = $_POST['fname'];
    $_mobile = $_POST['mobile'];
    $tryarray = array ($_name,$_mobile);
    foreach ($tryarray as $x) {
        echo $x."<br>";
    }
}

?>
</body>
</html>
