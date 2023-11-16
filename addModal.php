<div class="modal fade" id="addNew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form method="post" action="store.php">
                        <div class="row form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Enter your name">
                        </div>
                        <div class="row form-group">
                            <label for="celular">Telefono:</label>
                            <input type="text" class="form-control" id="celular" name="telefono" placeholder="Enter your phone number">
                        </div>
                        <div class="row form-group">
                            <label for="email">Correo:</label>
                            <input type="email" class="form-control" id="email" name="correo" placeholder="Enter your email">
                        </div>
                        <div class="row form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Enter your address">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="add">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>