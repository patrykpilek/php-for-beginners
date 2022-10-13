<?php

require 'Item.php';

$my_item = new Item();

$count = 0;

$count++;

define('MAXIMUM', 100);

define('COLOUR', 'red');

echo MAXIMUM;

echo COLOUR;

echo Item::MAX_LENGTH;
