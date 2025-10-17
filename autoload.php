<?php

session_start();

spl_autoload_register(callback: 'autoload');

function autoload($class_name)
{
    $array_paths = [
        'controllers/',
        'models/',
        'database/',
        'app/classes'
    ];
    $parts = explode('\\', $class_name);
    $name = array_pop($parts);
    foreach ($array_paths as $path) {
        $file = __DIR__ . '/' . $path . $name . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }

}
