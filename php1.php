<?php
/*Hello*/
    $a = 10;
    $b = 20;
function add()
{
        global $a, $b;
        return ($a + $b);
}
    echo "the function calling and may its add yhe valuem with goabl decaleration <br>";
    subtract();
    echo add();
    echo $a . "<br>";
    echo $b . "<br>";
    

function subtract()
{
        $m = 10;
        $n = 20;
        $res = $m - $n;

        echo "the subtracted  value from " . $res . "is the output";
}

function incr()
{
        static $x = 0;
        echo $x;
        $x++;
}
    incr();
    echo "<br>";
    incr();
    echo "<br>";
    incr();
    echo "<br>";
    incr();


    


?>

<html>
<head>
<title>php test</title>

</head>
<body>
    <?php
    echo "this is php file you may print with echo "
    ?>
</body>
</html>