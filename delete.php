<?php
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj=new controller();
$obj->delete($_GET['idPersona']);
?>