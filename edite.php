<?php
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj=new controller();
$obj->edite($_POST['idPersona'],$_POST['Nombre'],$_POST['Telefono'],$_POST['Correo'],$_POST['Direccion']);
?>