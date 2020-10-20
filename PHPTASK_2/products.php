
<?php
session_start();
include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id="header">
		<?php include 'header.php';?>
	</div>
	<?php
	echo '<div id="main">';
	echo '<div id="products">';
	foreach ($product as $key => $value) {
		echo '<div id="product-101" class="product">';
		echo '<img src= ' . $value['img_link'] . '>';
		echo '<h3 class="title"><a href="#">' . $value['name'] . '</a></h3>';
		echo "<span>Price: " . $value['price'] . "</span>";
		echo '<a class="add-to-cart" href="table.php?name=' . $value['name'] . '&price=' . $value['price'] . '&img=' . $value['img_link'] . '">Add To Cart</a>';
		
		echo '</div>';
		
		
		
	}
	
	
	echo '</div>';
	echo '</div>';
	?>			
	<div id="footer">
	<?php include 'footer.php';?>
	</div>
</body>
</html>