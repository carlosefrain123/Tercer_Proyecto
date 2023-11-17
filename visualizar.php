<?php
require_once("C:/xampp/htdocs/proyectc/view/header.php");
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj = new controller();
$array = $obj->showUs($_GET['idPersona']);
?>


<div class="container">
    <h1 class="page-header text-center">Visualizar</h1>
    <div class="col-sm-12">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre de contacto</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $array[0] ?></td>
                    <td><?= $array[1] ?></td>
                    <td><?= $array[2] ?></td>
                    <td><?= $array[3] ?></td>
                    <td><?= $array[4] ?></td>
                    <td>
                        <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editNew">
                            editar
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php require_once("C:/xampp/htdocs/proyectc/view/footer.php"); ?>