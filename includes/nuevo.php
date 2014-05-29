<!doctype html>
<html lang="es">
  <head>
      <meta charset="utf-8" />
      <title>Test CRUD - Formulario Cargos</title>
       <script src="js/jquery-2.1.0.js"></script>
       <link rel="stylesheet" href="css/bootstrap.css" />
       
  </head>
  <body>
    <div class="form-group has-success has feedback">
      <form method="GET" action="acciones.php">
        <label>Agregar Un Nuevo Cargo</label><br>
        <label class="control-label" for "inputSuccess2">Nombre del Cargo</label>
        <input type="text" name="newCargo" required class="form-control" id="inputSuccess2">
        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
        <input type="submit" name="new" value="Crear">
      </form>
      <form action="../cargos.php">
        <button>Regresar</button>
      </form>
    </div>
  </body>
</html>