<?php
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj=new controller();
$obj->insert($_POST['nombre'],$_POST['telefono'],$_POST['correo'],$_POST['direccion']);
?>