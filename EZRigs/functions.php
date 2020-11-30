<?php
// require mysqli conn
require('database/DBController.php');

// Require Product Class
require('database/Product.php');

// Require Cart Class
require('database/Cart.php');

// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();
//print_r($product->getData());

// Cart object
$Cart = new Cart($db);
/*$arr = array(
    "user_id"=>1,
    "item_id"=>4
);
$Cart->insertIntoCart($arr);
*/