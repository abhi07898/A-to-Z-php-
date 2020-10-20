
<?php

$products = array(
    "Electronics" => array(
                        "Television" => array(
                                            array(
                                                "id" => "PR001",
                                                "name" => "MAX-001",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR002",
                                                "name" => "BIG-301",
                                                "brand" => "Bravia"
                                            ),
                                            array(
                                                "id" => "PR003",
                                                "name" => "APL-02",
                                                "brand" => "Apple"
                                            )
                                        ),
                        "Mobile" => array(
                                            array(
                                                "id" => "PR004",
                                                "name" => "GT-1980",
                                                "brand" => "Samsung"
                                            ),
                                            array(
                                                "id" => "PR005",
                                                "name" => "IG-5467",
                                                "brand" => "Motorola"
                                            ),
                                            array(
                                                "id" => "PR006",
                                                "name" => "IP-8930",
                                                "brand" => "Apple"
                                            )
                                        )
                    ),
    "Jewelry" => array(
                        "Earrings" => array(
                                            array(
                                                "id" => "PR007",
                                                "name" => "ER-001",
                                                "brand" => "Chopard"
                                            ),
                                            array(
                                                "id" => "PR008",
                                                "name" => "ER-002",
                                                "brand" => "Mikimoto"
                                            ),
                                            array(
                                                "id" => "PR009",
                                                "name" => "ER-003",
                                                "brand" => "Bvlgari"
                                            )
                                        ),
                        "Necklaces" => array(
                                            array(
                                                "id" => "PR010",
                                                "name" => "NK-001",
                                                "brand" => "Piaget"
                                            ),
                                            array(
                                                "id" => "PR011",
                                                "name" => "NK-002",
                                                "brand" => "Graff"
                                            ),
                                            array(
                                                "id" => "PR012",
                                                "name" => "NK-003",
                                                "brand" => "Tiffany"
                                            )
                                        )
                )
                                            );
                                        




                                            // question -1 Solution creating table
                                            echo "<h3> 1: List all products in this format:</h3>";
                                            echo "<table>";
                                            echo "<tr>";
                                            echo "<th>Category</th>";
                                            echo "<th>Subcategory</th>";
                                            echo "<th>ID</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Brand</th>";
                                            echo "</tr>";
                                            //applying foreach loop for fatch the desired data
foreach ($products as $cat => $res) {
    foreach ($res as $subcat => $ress) {
    // if($subcat =="Television"){
        foreach ($ress as $key => $value) {
        // printing the fatched data in the form of table
                                                            echo "<tr>";
                                                            echo "<td>" . $cat . "</td>";
                                                            echo "<td>" . $subcat . "</td>";
                                                            echo "<td>" . $value['id'] . "</td>";
                                                            echo "<td>" . $value['name'] . "</td>";
                                                            echo "<td>" . $value['brand'] . "</td>";
                                                            echo "</tr>";
                                                       // }
        }
    }
}
                                            echo "</table>";






                                        
                                           // Question -2 Solution creating table
                                            echo "<h3>2. List all products in Mobile subcategory in </h3>" ;
                                            echo "<table>";
                                            echo "<tr>";
                                            echo "<th>Category</th>";
                                            echo "<th>Subcategory</th>";
                                            echo "<th>ID</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Brand</th>";
                                            echo "</tr>";
                                            // applying foreach for fatch desire output and print it into  the table
foreach ($products as $catg => $res) {
    foreach ($res as $subcat => $ress) {
        if ($subcat == "Mobile") {
            foreach ($ress as $key => $value) {
                                                        echo "<tr>";
                                                        echo "<td>" . $catg . "</td>";
                                                        echo "<td>" . $subcat . "</td>";
                                                        echo "<td>" . $value['id'] . "</td>";
                                                        echo "<td>" . $value['name'] . "</td>";
                                                        echo "<td>" . $value['brand'] . "</td>";
                                                        echo "</tr>";
            }
        }
    }
}
                                            echo "</table>";
                                            // qestion -3 Solution
                                            echo "<h3>3. List all products with their id, name, subcategory : </h3>" ;
foreach ($products as $cat => $res) {
    foreach ($res as $subcat => $ress) {
        foreach ($ress as $key => $value) {
            if ($value['brand'] == 'Samsung') {
                                                            echo "Product ID : " . $value['id'] . "<br>";
                                                            echo "Product Name : " . $value['name'] . "<br>";
                                                            echo "Subcategory : " . $subcat . "<br>";
                                                            echo "Category : " . $cat . "<br><br><br>";
            }
        }
    }
}
                                            




                                            //question-4 solution
                                            echo "<table>";
                                            echo "<tr>";
                                                        
                                            echo "<th>ID</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Brand</th>";
                                            echo "</tr>";
                                            echo "<h3>4. Delete product with id = PR003.</h3>";
                                           
foreach ($products as $cat => $res) {
    foreach ($res as $subcat => $ress) {
        foreach ($ress as $key => $value) {
            if ($value['id'] == 'PR003') {
                                                         unset($value['id']);
                                                         unset($value['name']);
                                                         unset($value['brand']);
            }
                                                        
            if (!empty($value)) {
                                                        echo "<tr>";
                                                        echo "<td>" . $value['id'] . "</td>";
                                                        echo "<td>" . $value['name'] . "</td>";
                                                        echo "<td>" . $value['brand'] . "</td>";
                                                        echo "</tr>";
            }
        }
    }
}
                                            echo "</table>";







                                            //question -5 solution
                                            echo "<br><br><br>";

                                            echo "<table>";
                                            echo "<tr>";
                                                        
                                            echo "<th>ID</th>";
                                            echo "<th>Name</th>";
                                            echo "<th>Brand</th>";
                                            echo "</tr>";
                                            echo "<h3>5. Update product name = 'BIG-555' with id = PR002.</h3>";
foreach ($products as $catg => $res) {
    foreach ($res as $subcatg => $ress) {
        foreach ($ress as $key => $value) {
            if ($value['id'] == 'PR002') {
                                                            $value['name'] = "BIG-555 ";
            }
                                                        
                                                        echo "<tr>";
                                                        echo "<td>" . $value['id'] . "</td>";
                                                        echo "<td>" . $value['name'] . "</td>";
                                                        echo "<td>" . $value['brand'] . "</td>";
                                                        echo "</tr>";
        }
    }
}
                                            echo "</table>";

                                      



?>
<html>
    <head>

        <title>PHP Task-1</title>
        <!--linking the extenal css file for make the page attractive-->
        <link rel="stylesheet" href="PHPTask1.css">
        

    </head>
<body>  

</body>
</html>