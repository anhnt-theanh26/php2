<?php

// spl_autoload_register(function ($class) {
//     // $class = App\Http\Controllers\HomeController;
//     $namespace = 'App\\';
//     $path = 'app';

//     $class = str_replace($namespace, '', $class);
//     // $class = Http\Controllers\HomeController;
//     $file = __DIR__ . DIRECTORY_SEPARATOR . $path;
//     $file = $file . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
//     if(file_exists($file)) {
//         require_once $file;
//     }
// });






// spl_autoload_register(function ($class) {
//     $namespace = 'App\\';
//     $path = 'app';
//     $class = str_replace($namespace, '', $class);
//     $file = __DIR__ . DIRECTORY_SEPARATOR . $path;
//     $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
//     $file = $file . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
//     if (file_exists($file)) {
//         require_once $file;
//     }
// });


spl_autoload_register(function ($class) {
    $namespace = "App\\";
    $path = 'app';
    $class = str_replace($namespace, '', $class);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $path;
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $file);
    $file = $file . DIRECTORY_SEPARATOR . $class . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});


// File: autoload.php

// spl_autoload_register(function ($className) {
//     $classFile = __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
    
//     if (file_exists($classFile)) {
//         require_once($classFile);
//     }
// });

