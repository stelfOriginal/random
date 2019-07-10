<?php
namespace models;

class Conexion{

    //propiedades
    private $conexion;

    //constructor
    public function __construct($servidor, $usuario, $password, $bd){
        $this -> conexion = new \mysqli($servidor, $usuario, $password, $bd);
    }

    //métodos
    public function mostrarDatos($tabla){

        $resultados = $this -> conexion -> query('SELECT * FROM ' . $tabla);
        
        foreach ($resultados as $valor){

        }
    }
}