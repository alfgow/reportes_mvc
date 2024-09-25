<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\UsuarioController;
use Controllers\HomeController;


$router = new Router();

$router->get('/', [
    HomeController::class, 
    'index'
]);


$router->get('/usuarios/registro', [
    UsuarioController::class, 
    'registro'
]);
$router->comprobarRutas();