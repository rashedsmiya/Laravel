
<?php

require_once "../vendor/autoload.php";

use App\Controllers\HomeController;
use App\Controllers\DashboardController;
use App\Controllers\LoginController;
use App\Controllers\UserController;
use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'home']);

    $r->addRoute('GET', '/login', [LoginController::class, 'login']);
    $r->addRoute('POST', '/login/check', [LoginController::class, 'loginCheck']);
    $r->addRoute('POST', '/logout', [LoginController::class, 'logout']);

    $r->addRoute('GET', '/dashboard', [DashboardController::class, 'dashboard']);

    $r->addRoute('GET', '/user/index/', [UserController::class, 'index']);

 }); 

  
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            echo "404 Not Found";
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            echo "405 Method Not Allowed";
            break;
        case FastRoute\Dispatcher::FOUND:
            [$controller, $method] = $routeInfo[1];
            $vars = $routeInfo[2]; // Contains parameters like ['id' => 5]
            call_user_func_array([new $controller(), $method], $vars); // Properly call controller method with parameters
            break;
    }

