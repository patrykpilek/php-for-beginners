<?php

$articles = [
    'a' => "First post",
    'b' => "Another post",
    'c' => "Read this!"
];

foreach ($articles as $index => $article) {
    echo $index . ' - ' . $article, ", ";
}