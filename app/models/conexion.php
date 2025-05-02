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
    //Destructor
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
    public function getEjecutionQuery($sql){
        return $this->conexion->query($sql);
    }
    //Metodo o funcion que devuelve un valor : INSERT, UPDATE, DELETE
    // SET para establecer o enviar DATOS
    public function setEjecutionQuery($sql){
        return $this->conexion->query($sql);
    }
    //Getter and setter
    public function getServidor(){
        return $this->servidor;
    }
    public function getUser(){
        return $this->user;
    }
    public function getClave(){
        return $this->clave;
    }
    public function getDatabase(){
        return $this->database;
    }
    public function setServidor($servidor){
        $this->servidor = $servidor;
    }
    public function setUser($user){
        $this->user = $user;
    }
    public function setClave($servidor){
        $this->clave = $servidor;
    }
    public function setDatabase($database){
        $this->database = $database;
    }
}

