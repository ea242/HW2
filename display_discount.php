<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
$product = $_POST["product_description"];
$price = $_POST["list_price"];
$disc = $_POST["discount_percent"];
$disc = $disc/100;
$sDisc = $price*$disc;
$sPrice = $price-$sDisc;
?>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $product; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $disc; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $sDisc; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $sPrice; ?></span><br>
    </main>
</body>
</html>
