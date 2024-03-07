<?php
class conexion{
    private $servidor= "localhost";
    private $usuario= "root";
    private $contraseña= "";
    private $conn;
    public function __construct(){ 
        try{
            $this->conn=new PDO("mysql:host=$this->servidor;dbname=proyectos", $this->usuario, $this->contraseña);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch( PDOException $e){
                return "falla de conexion".$e;
            }
    }
    public function ejecutar($sql){// insertar/delete/actualizar
        $this->conn->exec($sql);
        return $this->conn->lastInsertId();
    }
    public function consultar($sql){
        $sentencia=$this->conn->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }



}




?>