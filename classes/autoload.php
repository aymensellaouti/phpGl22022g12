<?php

function load($className) {
//    echo $className;
    $paths = ['classes/', '','../classes/'];
    foreach ($paths as $path ) {
        $classPath = "$path/$className.php";
        if (file_exists($classPath)) {
            require_once($classPath);
            return;
        }
    }
}

spl_autoload_register('load');