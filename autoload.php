<?php

$classmap = require_once 'classmap.php';

foreach ($classmap as $class) {

    $classPath = ROOT_DIR . "/" . ltrim($class, " \\/") . ".php";

    if (file_exists($classPath) && is_file($classPath)) {

        require_once "$classPath";

    }

}