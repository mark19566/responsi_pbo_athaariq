<?php

require_once "data/Product.php";

$product = new Product("asus", 50000);

// tampilkan product get name
echo $product->getName() PHP_EOL;
// tampilkan product get price
echo $product->getPrice() . PHP_EOL;  
$yummy = new ProductDummy("asus", 5000);
$yummy->info();