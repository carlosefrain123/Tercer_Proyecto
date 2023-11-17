<?php
class controller{
    private $model;
    public function __construct(){
        require_once("C:/xampp/htdocs/proyectc/model/model.php");
        $this->model=new model();
    }
    public function insert($nombre,$telefono,$correo,$direccion){
        $idInsert=$this->model->insertar($nombre,$telefono,$correo,$direccion);
        return($idInsert!=false)?header('Location: index.php'):false;
    }
    public function showUs($idPersona){
        $idshowus=$this->model->show($idPersona);
        return($idshowus!=false)?$idshowus:header('Location: index.php');
    }
    public function list(){
        $idList=$this->model->mostrar();
        return($idList!=false)?$idList:false;
    }
    public function edite($idPersona,$nombre, $telefono, $correo, $direccion){
        $idEdite=$this->model->editar($idPersona,$nombre, $telefono, $correo, $direccion);
        return($idEdite!=false)?header('Location: index.php'):false;
    }
}
?>