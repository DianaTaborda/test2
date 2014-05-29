<?php include('BuscarCargo.php') ?>
<!doctype html>
<html lang="es">
  <head>
      <meta charset="utf-8" />
      <title>Test CRUD - Formulario Cargos</title>
       <script src="js/jquery-2.1.0.js"></script>
       <link rel="stylesheet" href="css/bootstrap.css" />
       
  </head>
  <body>
    <div class="content content-main">
      <form method="GET" action="acciones.php">
        <label>Editar un Cargo</label><br>
        <label>Nuevo Nombre: </label> 
        <input type="hidden" name="id" value="<?php echo $Row['id']?>">
        <input type="text" name="changeCargo" required value="<?php echo $Row['nombre']?>">
        <input type="submit" name="change" value="Actualizar">
      </form>
      <form action="../cargos.php">
        <button>Regresar</button>
      </form>
    </div>
  </body>
</html>