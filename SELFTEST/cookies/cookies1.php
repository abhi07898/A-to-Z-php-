
<?php
include 'cookies.php';
if (!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named " . $cookie_name . "is not set ";
} else {
    echo "Cookie " . $cookie_name . "is set <br>";
    echo "cookies value is : " . $_COOKIE[$cookie_name] . "<br>";
}
?>;