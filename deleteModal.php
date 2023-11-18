<?php
require_once("C:/xampp/htdocs/proyectc/controller/controller.php");
$obj = new controller();
$dato = $obj->list();
?>
<?php if ($dato) : ?>
    <?php foreach ($dato as $row) : ?>
        <div class="modal fade" id="delete<?= $row[0] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Contacto</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que desea eliminar al contácto N°<?= $row[0]?>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="bi bi-file-x-fill"></i> Cerrar</button>
                        <a href="delete.php?idPersona=<?= $row[0] ?>" type="button" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
<?php endif; ?>