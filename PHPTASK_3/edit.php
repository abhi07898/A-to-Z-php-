<?php
session_start(); //session start again because i am trying to update and delete the value from session array.
//retrive the data from table within form 
$name = $_POST['name0'];
$link = $_POST['name1'];
$price = $_POST['name2'];
$quant = $_POST['name3'];
$event = $_POST['event'];


$prod = array($name , $link, $price, $quant, $event);
//print_r($prod);
if ($event == 'update') {
    $_SESSION[$name] = $prod;
} elseif ($event == 'delete') {
    unset($_SESSION[$name]);
}
header('location:products.php');
?>