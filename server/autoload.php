<?php
/**
 * Created by PhpStorm.
 * User: hanxiaolong
 * Date: 18-10-7
 * Time: 下午3:45
 */
spl_autoload_register(function ($className) {
    $dirName = [
        'service',
        'class',
        'dao',
        'tool'
    ];

    foreach ($dirName as $v) {
        $fileName = __DIR__ . '/' . $v . '/' . $className . '.php';

        if (file_exists($fileName)) {
            require_once $fileName;
            break;
        }
    }
});
