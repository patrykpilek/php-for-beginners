<?php

/**
 * Redirect to another URL on the same site
 *
 * @param string $path The path to redirect to
 *
 * @return void
 */
function redirect($path)
{
    if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
        $protocol = 'https';
    } else {
        $protocol = 'http';
    }

//    header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . $path);
    header("Location: $protocol://" . $_SERVER['HTTP_HOST'] . "/deleting-data-from-database-from-php/3" . $path);
    exit;
}
