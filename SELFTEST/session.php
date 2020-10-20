
<?php
session_start();


$_SESSION['favcolor'] = "green";
$_SESSION['favanimal'] = "cat";

echo "sessio varaible are set <br> now i am trying ot print the set session variable ";


echo "our favourit color = " .$_SESSION['favcolor'] . "<br>";
echo "favourite animal is " . $_SESSION['favanimal'] . '<br>'; 

?>;