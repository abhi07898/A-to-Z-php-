
<?php
//session started
session_start();
?>
<!--- include the config.php file-->
<?php include 'config.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
	<style>
	table{
			width:100%;
        }
        table, td, th, tr {
            border: 2px solid black;
            border-collapse:collapse;
			text-align:center;
		}
		th {
			background-color:black;
			color:white;
			padding:15px;
			border:1px solid white;
		}
		input {
			padding: 10px 17px;
		}
		.input-design{
			padding: 10px 17px;
			background-color:black;
			color:white;	
		}
	</style>
	
</head>
<body>

	<div id="header">
	<!--- include the header.php file-->
		<?php include 'header.php';?>
	</div>



	<?php
	//printing the whole array elements in the form of table
	echo '<div id="main">';
	echo '<div id="products">';
	echo "<form method = 'GET' action ='' >";  // defining form .....
	foreach ($product as $key => $value) {
		echo '<div id="product-101" class="product">';
		echo '<img src= ' . $value['img_link'] . '>';
		echo '<h3 class="title"><a href="#">' . $value['name'] . '</a></h3>';
		echo "<span>Price: " . $value['price'] . "</span>";
		//echo "<input type='button' value = 'Add To Cart' class='add-to-cart' name ='$key'>";
		echo "<a class='add-to-cart' href='products.php?$key'>Add To Cart</a>";
		echo '</div>';


		//using 'isset()' for fatching the array value by key
		
		if (isset($_GET["$key"])) {
			$name = $value['name'];
			$link = $value['img_link'];
			$price = $value['price'];
			$quant = 1;
			foreach ($_SESSION as $pro => $val) {
				if ($pro == $key) {
					$quant=$val[3] +1 ;
				}
				// $prod = array($name , $link, $price, $quant);
				// $_SESSION[$name] = $prod;
			}
			
			$prod = array($name , $link, $price, $quant);
			$_SESSION[$name] = $prod;
			
		}
	}
	
	echo "</form>";
	echo '</div>';
	echo '</div>';

	?>

	<!--Defining a div with id of  'table-result' for showing the content after add to cart click and for performing updation and deletion -->
	<div id="table-result">
	
	<table>
        <thead>
            <tr>
                <th>Sr.No</th>
                <th>Product_name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Quantity</th>
				<th>Total Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $amount = 0;
			$no = 1;
			$p = 0;
			$q = 0;
			$total = 0;
            foreach ($_SESSION as $product) {
                echo "<tr>";
                echo '<form action="edit.php" method = "POST">';
                    echo "<td>" . ($no++) . "</td>";
                
                foreach ($product as $key => $value) {
                    if ($key == 3) {
                        echo "<td> <input type='text' value='" . $value . "' name='name$key'></td>";
                        $q = $value;
                    }
                    elseif ($key == 2) {
                        echo "<input type='hidden' name='name$key' value= '" . $value . "'>";
                        echo "<td> $" . $value . "</td>";
                        $p = $value;
                    } elseif ($key == 1) {
                        echo "<input type='hidden' name='name$key' value="  . $value . ">";
                        echo "<td> <img src = "  . $value . "> </td>";
                    } elseif ($key == 0) {
                        echo "<input type='hidden' name='name$key' value="  . $value . ">";
                        echo "<td>" . $value . "</td>";
					}

				}	
					$amount = ($q * $p);
					echo ' <td> $' . ($amount) . '</td>';
                    echo "<td><input type='submit' value='update' name='event' class = 'input-design'></td>";
					echo "<td><input type='submit' value='delete' name='event' class = 'input-design'></td>";
					
                echo '</form>';
				echo '</tr>';
				$total = $amount + $total;
			}
			
			echo '<tr><td colspan ="8"  style="padding:10px;"> Total Amount : $' . $total .  '</td></tr>';
            ?>
        </tbody>
        </table>
	</div>
	<!--including footer file-->
	 
	 
	
	<div id="footer">
	<?php include 'footer.php';
	//session_destroy();
	?>
	</div>
</body>
</html>