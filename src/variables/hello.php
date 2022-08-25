<?php

$price = 2.95;
$quantity = 5;

var_dump($price * $quantity);


$message = "Hello";
$name = "Dave";

echo $message . " " . $name;

$price = "150";
$quantity = 3;

$price = $price * $quantity;

var_dump($price);

$is_editor = true;
$is_admin = false;

var_dump( ! $is_editor);
var_dump($is_editor or $is_admin);
var_dump($is_editor and $is_admin);