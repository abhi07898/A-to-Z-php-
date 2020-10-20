
<?php
echo "today is " . date("Y/m/d") . "<br>";
echo "today is " . date("Y.m.d") . "<br>";
echo "today is " . date("Y-m-d") . "<br>";
echo "todya is " . date("l");

echo "now thr term of hour<br>";
echo "the time is " . date("h:i:sa");

echo "<br>create a date with mktime()<br>";
$d = mktime(11,14,54,8,12,2014);
echo "created date is ". date("Y-m-d h:i:sa", $d);


echo "<br> string to time <br>";
$d = strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d). "<br>";
?>