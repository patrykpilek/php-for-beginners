<?php

$password = '123456';

//$hash = password_hash($password, PASSWORD_DEFAULT);
//
//echo $hash;

$hash = '$2y$10$5P4DrkeYxCsrkuv0F6lKGORUM820qkYWXQgwqy3.4VsQheA40066y';

var_dump(password_verify($password, $hash));
