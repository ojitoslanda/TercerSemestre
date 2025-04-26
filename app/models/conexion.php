<?php
class Conexion{
    //Atributos
    private $servidor;
    private $user;
    private $clave;
    private $database;
    private $conexion;
    //Constructor
    public function __construct(){
        $this->servidor = "localhost";
        $this->user = "root";
        $this->clave = "";
        $this->database = "minimarket_db";
    }
    public function __destruct(){ }
    // Funcion para conectar
    public function conectar(){
        $this->conexion = new mysqli($this->servidor,$this->user,$this->clave,$this->database);
    }
    //Funcion para salir o cerrar conexion
    public function cerrarConexion(){
        $this->conexion->close();
    }
    //Metodo o funcion que devuelve un registro: SELECT
    // GET -> para obtener
    public function getEjecucionQuery($sql){
        return $this->conexion->query($sql);
    }
    //Metodo o funcion que devuelve un valor : INSERT, UPDATE, DELETE
    // SET para establecer o enviar DATOS
    public function setEjecucionQuery($sql){
        return $this->conexion->query($sql);
    }
}

