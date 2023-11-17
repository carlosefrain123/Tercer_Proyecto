<?php
class model{
    private $PDO;
    public function __construct(){
        require_once("C:/xampp/htdocs/proyectc/config/bd.php");
        $con=new bd();
        $this->PDO = $con->conexion();
    }
    public function insertar($nombre, $telefono, $correo, $direccion){
        $stament = $this->PDO->prepare("INSERT INTO usuarios(idPersona, Nombre, Telefono, Correo, Direccion) VALUES (null, :nombre, :telefono, :correo, :direccion)");
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":telefono", $telefono);
        $stament->bindParam(":correo", $correo);
        $stament->bindParam(":direccion", $direccion);
        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }
    public function show($idPersona){
        $stament=$this->PDO->prepare("SELECT * FROM usuarios WHERE idPersona=:idPersona LIMIT 1");
        $stament->bindParam(":idPersona", $idPersona);
        return ($stament->execute())? $stament->fetch() : false;
    }
    
    public function mostrar(){
        $stament = $this->PDO->prepare("SELECT * FROM usuarios");
        return($stament->execute()) ? $stament->fetchAll():false;
    }
    public function editar($idPersona,$nombre, $telefono, $correo, $direccion){
        $stament = $this->PDO->prepare("UPDATE usuarios SET Nombre=:nombre, Telefono=:telefono, Correo=:correo, Direccion=:direccion WHERE idPersona=:idPersona");
        $stament->bindParam(':idPersona',$idPersona);
        $stament->bindParam(":nombre", $nombre);
        $stament->bindParam(":telefono", $telefono);
        $stament->bindParam(":correo", $correo);
        $stament->bindParam(":direccion", $direccion);
        return ($stament->execute()) ? $idPersona : false;
    }
}
?>