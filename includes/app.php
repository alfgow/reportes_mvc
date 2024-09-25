<?php

require 'funciones.php';
require 'config/conn.php';
require __DIR__.'/../vendor/autoload.php';

$connection = conectarDB();

use Model\Usuario;
Usuario::setDB($connection);