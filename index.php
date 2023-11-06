<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Demo</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
  <div class="container mt-5">
    <h1 class="text-center">CRUD con PHP, PDO, AJAX y DATATABLES.JS</h1>
    <div class="row mb-2">
      <div class="col-12 text-center">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalUsuario" id="botonCrear">
          <i class="bi bi-plus-circle-fill"></i> Crear
        </button>
      </div>
    </div>
    <div class="table-responsive">
      <table id="table_id" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Imagen</th>
            <th>Fecha Creación</th>
            <th>Editar</th>
            <th>Borrar</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
  <!-- Button trigger modal -->
  <!-- Modal -->
  <div class="modal fade" id="modalUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear Usurio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="" method="post" id="formulario" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label for="nombre">Ingrese el nombre</label>
              <input type="text" name="nombre" id="nombre" class="form-control">
            </div>
            <div class="form-group">
              <label for="apellidos">Ingrese los apellidos</label>
              <input type="text" name="apellidos" id="apellidos" class="form-control">
            </div>
            <div class="form-group">
              <label for="telefono">Ingrese el teléfono</label>
              <input type="text" name="telefono" id="telefono" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Ingrese Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="imagen_usuario">Seleccione una imagen</label>
              <input type="file" name="imagen_usuario" id="imagen_usuario" class="form-control">
              <span id="imagen-subida"></span>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="table_id" id="table_id">
              <input type="hidden" name="operacion" id="operacion">
              <input type="submit" name="action" id="action" class="btn btn-success" value="Crear">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
  </script>
</body>

</html>