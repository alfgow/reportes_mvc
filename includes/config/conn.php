<?php

//  $host_name = 'db5015953609.hosting-data.io';
//  $database = 'dbs13000333';
//  $user_name = 'dbu1508876';
//  $password = 'D130682d!';

function conectarDB(){

    $host_name = 'localhost';
    $database = 'reportes';
    $user_name = 'root';
    $password = 'root';
    
    $connection = new mysqli($host_name, $user_name, $password, $database);

    if (!$connection) {
    echo "Error al conectar a la base de datos";
    exit;
    }

     return $connection;
}

