<?php
require_once("C:/xampp/htdocs/proyectc/view/header.php");
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj = new controller();
$row = $obj->showUs($_GET['idPersona']);
?>


<div class="container">
    <h1 class="page-header text-center">Visualizar</h1>
    <div class="col-sm-12">
        <table class="table table-bordered table-striped">
            <thead class="text-center">
                <tr>
                    <th>Id</th>
                    <th>Nombre de contacto</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Dirección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <td><?= $row[0] ?></td>
                    <td><?= $row[1] ?></td>
                    <td><?= $row[2] ?></td>
                    <td><?= $row[3] ?></td>
                    <td><?= $row[4] ?></td>
                    <td>
                        <a href="index.php" type="button" class="btn btn-success">
                            <i class="bi bi-arrow-return-left"></i> Volver
                        </a>
                        <a href="#edit_<?php echo $row[0]; ?>" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_<?php echo $row[0]; ?>">
                            <i class="bi bi-pencil-square"></i> Editar
                        </a>
                        <!--modal-->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?= $row[0] ?>">
                            <i class="bi bi-trash-fill"></i> Eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include("addModal.php"); ?>
<?php include("editModal.php"); ?>
<?php include("deleteModal.php"); ?>
<?php require_once("C:/xampp/htdocs/proyectc/view/footer.php"); ?>