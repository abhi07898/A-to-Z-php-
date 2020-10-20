<?php
session_start();
$user = $_SESSION['username'];

?>
<html>
    <head>
        <title>Log Out Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div style="padding:20px;
            font-size: 30px;
            height:50px;
            background-color:cyan;
            text-align: center;">
             Welcome Mr . <?php echo $user?> You are successfully login in this portal.
        </div>
        <form action="login.php" method='GET'>
            <a href='../login.php' style="padding:15px 30px;
                                            background-color:black;
                                            border:none;
                                            color: cyan;                                           
                                            margin-top: 30px;
                                            text-decoration: none;">LOG OUT </a>
          
        </form>
        <?php
         session_destroy();
       
        ?>
    </body>
</html>


