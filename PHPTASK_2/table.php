<?php
session_start();
print_r($_GET);
$myname = $_GET['name'];
$myprice = $_GET['price'];
$mylink = $_GET['img'];
//echo $mylink, $myname, $myprice;

$pro = array ($myname, $myprice, $mylink);
//print_r($pro);

$_SESSION['$myname'] = $pro;
foreach($_SESSION as $value) {
    print_r ($value);
}

?>