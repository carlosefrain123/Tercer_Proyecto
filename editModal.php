<?php
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj = new controller();
$dato = $obj->list();
?>
<?php if ($dato) : ?>
    <?php foreach ($dato as $row) : ?>
        <div class="modal fade" id="edit_<?php echo $row[0]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 text-center" id="exampleModalLabel">Editar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <form method="post" action="edite.php?idPersona=<?php echo $row['idPersona'] ?>">
                                <div class="row form-group">
                                    <label for="id" class="col-sm-2 col-form-label">ID:</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row['idPersona'] ?>" name="idPersona">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <label for="nombre">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="Nombre" value="<?php echo $row['Nombre'] ?>">
                                </div>
                                <div class="row form-group">
                                    <label for="celular">Telefono:</label>
                                    <input type="text" class="form-control" id="celular" name="Telefono" value="<?php echo $row['Telefono'] ?>">
                                </div>
                                <div class="row form-group">
                                    <label for="email">Correo:</label>
                                    <input type="email" class="form-control" id="email" name="Correo" value="<?php echo $row['Correo'] ?>">
                                </div>
                                <div class="row form-group">
                                    <label for="direccion">Dirección:</label>
                                    <input type="text" class="form-control" id="direccion" name="Direccion" value="<?php echo $row['Direccion'] ?>">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-file-x-fill"></i> Cerrar</button>
                                    <button type="submit" class="btn btn-primary" name="add"><i class="bi bi-save"></i> Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif; ?>