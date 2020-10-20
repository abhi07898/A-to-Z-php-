
<?php
session_start();
print_r($_SESSION)

?>
<html>
    <head>
        <title>session </title>
    </head>
    <body>
       <?php
            echo "our favourit color = " . $_SESSION['favcolor'] . "<br>";
            echo "favourite animal is " . $_SESSION['favanimal'] . '<br>';
        ?> 
    </body>
</html>