<?php

require_once("application/Product.php");

$pro = new application\Product();
echo $pro->getProductType();
$pro->setProductType('FlashDisk');
echo "<br>";
echo $pro->getProductType();
