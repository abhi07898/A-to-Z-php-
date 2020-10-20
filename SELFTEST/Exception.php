
<?php
$a = 1;
try {
    if ($a >= 10) {
        echo $a . "is the most valuable value with condiiton <br>";
    } else {
        throw new Exception("this is not a valid number <br>");
    }
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "this is finaly block that might execute evenry time";
}
?>

<html>
    <head>
        <title>
        try to use cookies in localhost
        </title>
    </head>
    <body>
        
    </body>
</html>