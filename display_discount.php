<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<?php
setlocale(LC_MONETARY, 'en_US');
$product = htmlspecialchars(filter_input(INPUT_POST,"product_description",FILTER_SANITIZE_STRING));
$price = htmlspecialchars(filter_input(INPUT_POST,"list_price",FILTER_SANITIZE_NUMBER_INT));
$disc2 = htmlspecialchars(filter_input(INPUT_POST,"discount_percent",FILTER_SANITIZE_NUMBER_INT));
$disc = $disc2/100;
$sDisc = $price*$disc;
$sPrice = $price-$sDisc;
?>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product; ?></span><br>

        <label>List Price:</label>
        <span><?php echo money_format('%n',$price); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $disc2."%"; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo money_format('%n',$sDisc); ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo money_format('%n',$sPrice); ?></span><br>
    </main>
</body>
</html>
