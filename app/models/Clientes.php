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

    // Funcion para listar o dar reportes de todos los clientes
    public function reportes_clientes(){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "SELECT * FROM tb_cliente";
        //Ejecutamos el comando
         return $cn->getEjecutionQuery($sql);
    }

    // Funcion para eliminar clientes
    public function eliminar_cliente_por_dni($dni){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "DELETE FROM tb_cliente WHERE dni = '$dni' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }

    // Funcion para editar clientes
    public function editar_cliente($dni,$nombre,$apellido,$correo){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "UPDATE tb_cliente 
                SET nombre ='$nombre', apellido='$apellido', correo='$correo' 
                WHERE dni = '$dni' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }

    // Funcion para consultar DNI y que salga todos los datos del cliente
    public function consultar_dni_cliente($dni){
        //Inicializamos la conexion.php
        $cn = new conexion();
        //Utilizamos la funcion o metodo conectar()
        $cn->conectar();
        //Comando para consultar la lista
        $sql = "SELECT * FROM tb_cliente WHERE dni = '$dni' ";
        //Ejecutamos el comando
         return $cn->setEjecutionQuery($sql);
    }

}
?>