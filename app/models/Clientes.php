<?php
//Llamamos a la conexion
require_once("conexion.php");
//Creamos una clase llamada CLIENTES
class Clientes{
    //Creamos la funcion de registrar clientes
    public function registrar_cliente($dni,$nom,$ape,$correo){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Almacenamos en una variable($sql) los comandos de INSERT
        $sql = "insert into tb_cliente(dni,nombre,apellido,correo)values('$dni','$nom','$ape','$correo')";
        //Ejecutamos la funcion
        return $cn->getEjecutionQuery($sql);
    }
}
?>