<?php
$name = $_POST['name'];
$address = $_POST['address'];
echo $name;
echo $address;
?>;
<html>
    <head>
        <title>php form element testing </title>
    </head>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
        <label for="fname">Name :</label>
        <input type="text" name="name">
        <br>
        <label for="address">Address : </label>
        <input type="text" name="address">
        <br>
        <input type="submit" value="Submit">
    </form>
</html>