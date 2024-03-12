<?php 
    require('./util/functions.php');
    // require('app/controllers/index.php');
    // require('app/controllers/notification.php');

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    // $index = new Index;
    // $notification = new Notification; 

    $routes = [
        '/' => 'app/controllers/index.php',
        '/notification' => 'app/controllers/notification.php',
    ];

    if(array_key_exists($uri, $routes)){
        require $routes[$uri];
    }
