<?php

namespace App;
date_default_timezone_set('America/Mexico_City');
setlocale(LC_TIME, 'es_MX.UTF-8','esp');

class Usuario {
    
    protected static $connection;
    protected static $columnasDB = ['id', 'nombre', 'telefono', 'email', 'empresa', 'usuario', 'password', 'admin', 'confirmado', 'token', 'fecha_creado'];

    public $id;
    public $nombre;
    public $telefono;
    public $email;
    public $empresa;
    public $usuario;
    public $password;
    public $admin;
    public $confirmado;
    public $token;
    public $fecha_creado;

    public static function setDB($database){
        self::$connection = $database;
    }

    public function __construct($args=[])
    {
        $uniqueId = bin2hex(random_bytes(16));
        $uniqueToken = bin2hex(random_bytes(16));
        $passwordHash = password_hash($args['password'],PASSWORD_DEFAULT);
        $this->id = $uniqueId;
        $this->nombre = $args['nombre'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? '';
        $this->empresa = $args['nombre'] ?? '';
        $this->usuario = $args['telefono'] ?? '';
        $this->password = $passwordHash ?? '';
        $this->admin = 0;
        $this->confirmado = 0;
        $this->token = $uniqueToken;
        $this->fecha_creado = date("d/m/Y, g:ia");
    }

    public function guardar() {

        $sanitizados = $this->sanitizar();
        $keys = join(', ', array_keys($sanitizados));
        $values = join("', '", array_values($sanitizados));

        $query = "INSERT INTO usuarios(";
        $query.= $keys;
        $query.= " ) VALUES ('";
        $query.= $values;
        $query.= "')";

        $resultado = self::$connection->query($query);


    }

    public function iterarAtributos(){
        $atributos = [];
        foreach(self::$columnasDB as $columna){
            $atributos[$columna] = $this->$columna;
        }
        return $atributos;
    }

    public function sanitizar(){
        $atributos = $this->iterarAtributos();
        $sanitizado = [];
        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$connection->escape_string($value);
        }
        return $sanitizado;
    }
    

}