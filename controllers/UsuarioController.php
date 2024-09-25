<?php

namespace Controllers;
use MVC\Router;

class UsuarioController{
     public static function registro(Router $router){
        $router->render('auth/registro');
     }
}