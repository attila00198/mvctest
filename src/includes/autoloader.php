<?php

spl_autoload_register(function ($className) {
    //require str_replace('\\', '/', $className) . '.php';

    $folders = ['includes', 'controller', 'model', 'views', 'config'];
    $file = lcfirst($className) . '.php';

    foreach ($folders as $folder) {
        $fullPath = "src" . DIRECTORY_SEPARATOR . $folder . DIRECTORY_SEPARATOR . $file;
        if (file_exists($fullPath)) {
            include $fullPath;
        }
    }
});
