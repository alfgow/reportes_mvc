<?php

require '../includes/app.php';

use App\Usuario;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $usuario = new Usuario($_POST);

    $usuario->guardar();

}