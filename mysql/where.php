
<?php
include 'config.php';
include 'functions.php';
$sql = "Select sr_No, name, course from test where sr_no = 1";
whereclause($sql);
?>