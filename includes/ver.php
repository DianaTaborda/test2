<!doctype html>
<html lang="es">
  <head>
      <meta charset="utf-8" />
      <title>Test CRUD - Formulario Ver</title>
       <script src="js/jquery-2.1.0.js"></script>
       <link rel="stylesheet" href="css/bootstrap.css" />
  </head>
  <body>
      <div class="content content-main">
         <table class="table">
            <thead> <th>id</th>
                    <th>nombre</th>
            <thead>
            <tbody>
              <?php include('acciones.php') ?>
              
            </tbody>
         </table>
      </div>
      <form action="../cargos.php">
        <button>Regresar</button>
      </form>
      
  </body>
</html>