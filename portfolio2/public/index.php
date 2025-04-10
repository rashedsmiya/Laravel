<?php

require_once "../vendor/autoload.php";

use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\ProfileController;
use App\Controllers\UserControllers;

use FastRoute\RouteCollector;

$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->addRoute('GET', '/', [HomeController::class, 'home']);


    $r->addRoute('GET', '/login', [LoginController::class, 'login']);
    $r->addRoute('POST', '/login/check', [LoginController::class, 'loginCheck']);
    $r->addRoute('GET', '/logout', [LoginController::class, 'logout']);

    $r->addRoute('GET', '/dashboard', [DashboardController::class, 'dashboard']);

    //  User Routes
    $r->addRoute('GET', '/user/index', [UserControllers::class, 'index']);
    $r->addRoute('GET', '/user/create', [UserControllers::class, 'create']);
    $r->addRoute('POST', '/user/store', [UserControllers::class, 'store']);
    $r->addRoute('GET', '/user/edit/{id:\d+}', [UserControllers::class, 'edit']);
    $r->addRoute('POST', '/user/update/{id:\d+}', [UserControllers::class, 'update']);
    $r->addRoute('GET', '/user/delete/{id:\d+}', [UserControllers::class, 'delete']);
    $r->addRoute('GET', '/user/status/{id:\d+}', [UserControllers::class, 'status']);

    // Profile Routes 
    $r->addRoute('GET', '/user/profile', [ProfileController::class, 'profile']);
    $r->addRoute('POST', '/user/profile/update', [ProfileController::class, 'profileUpdate']);

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
