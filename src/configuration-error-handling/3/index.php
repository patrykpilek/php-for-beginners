<?php

//try {
//    $datetime =  new DateTime('invalid');
//} catch (Throwable $e) {
//    echo "Caught: " , $e->getMessage();
//}

function errorHandler($level, $message, $file, $line)
{
//    echo "Caught error: ", $message;
    throw new ErrorException($message, 0, $level, $file, $line);
}

set_error_handler('errorHandler');

function exceptionHandler($exception)
{
    echo 'Caught exception: ', $exception->getMessage();
}

set_exception_handler('exceptionHandler');

$datetime =  new DateTime('invalid');

//$i = 1 / 0;
