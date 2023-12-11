<?php

include_once '../config.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', DIRECTORY_SEPARATOR);
    $path = '..' . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($path)) {
        include_once $path;
        return true;
    }
    return false;
});