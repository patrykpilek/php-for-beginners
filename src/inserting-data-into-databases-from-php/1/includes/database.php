<?php

$db_host = "mysql";
$db_name = "tutorial";
$db_user = "root";
$db_pass = "secret";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}
