<?php
$cookie_name = "user";
$cookie_value = "abhishek pandey id trying to set the cookies ";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
?>


<html>
    <head>
        <title> cookies uses </title>
    </head>
    <body>
        
        <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named " . $cookie_name . "is not set ";

        } else {
            echo "Cookie " . $cookie_name . "is set <br>";
            echo "cookies value is : " . $_COOKIE[$cookie_name] . "<br>";
        }
        ?>
    </body>
</html>