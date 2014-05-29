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
         <table class="table">
            <thead> <th>id</th>
                    <th>nombre</th>
                    <th>Acciones</th>
            <thead>
            <tbody>
                    <?php include('includes/acciones.php') ?>
            </tbody>
            <tfooter><form action="includes/acciones.php" method="get"><input type="submit" name="accion_new" value="Agregar Cargo" class="btn btn-primary "/></form><?php echo $msg; ?></tfooter>
         </table>
      </div>
      
  </body>
</html>