
<?php

?>;
<html>
    <head>
        <title>
            how to use filters 
        </title>
    </head>
    <body>
        <table>
            <tr>
                <td>Fliater name</td>
                <td>filter ID </td>
            </tr>
            <?php 
            foreach (filter_list() as $id =>$filter){
                echo "<tr><td>". $filter. "</td><td>".$filter_id($filter)."</td><tr>";
            }
            ?>


        </table>

    </body>
</html>