<?php

require '../vendor/autoload.php';

use League\Plates\Engine;
use FastRoute\RouteCollector;
use DI\ContainerBuilder;
use App\Controllers;
use App\Models\DataBase;


$ContainerBuilder = new ContainerBuilder;
$ContainerBuilder->addDefinitions([
    Engine::class => function (){
        return new Engine('../app/Views');
    }
]);

$container = $ContainerBuilder->build();

$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute('GET', '/home', ['App\Controllers\MainController', 'mainPage']);
    // ASYNCH REQUESTS
    $r->addRoute('POST', '/home/add-prod', ['App\Controllers\MainController', 'addProduct']);

    //AUTH ROUTES
    $r->addRoute('GET', '/auth/registration-form', ['App\Controllers\Auth\RegController', 'RegForm']);
    $r->addRoute('POST', '/auth/register-user', ['App\Controllers\Auth\RegController', 'Register']);
    $r->addRoute('GET', '/auth/authorization-form', ['App\Controllers\Auth\LogController', 'LogForm']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        $container->call($handler, ['formData' => $_POST]);
        break;
}