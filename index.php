<?php
session_start();
require_once("C:/xampp/htdocs/proyectc/view/header.php");
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj = new controller();
$dato = $obj->list();
?>


<div class="container">
    <h1 class="page-header text-center">Agenda de contacto Personal</h1>
    <a href="#addNew" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addNew"><i class="bi bi-plus-lg"></i>Nuevo</a>
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
                <?php if ($dato) : ?>
                    <?php foreach ($dato as $row) : ?>
                        <tr>
                            <td><?= $row[0] ?></td>
                            <td><?= $row[1] ?></td>
                            <td><?= $row[2] ?></td>
                            <td><?= $row[3] ?></td>
                            <td><?= $row[4] ?></td>
                            <td>
                                <a href="visualizar.php?idPersona=<?= $row[0] ?>" type="button" class="btn btn-success">
                                    Visalizar
                                </a>
                                <a href="#edit_<?php echo $row[0]; ?>" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_<?php echo $row[0]; ?>">
                                    Editar
                                </a>
                                <!--modal-->
                                
                            </td>
                        </tr>
                    <?php endforeach ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>

<?php include("addModal.php"); ?>
<?php include("editModal.php") ?>
<?php require_once("C:/xampp/htdocs/proyectc/view/footer.php"); ?>