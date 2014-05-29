<?php 
//Realiza la conexión con el equipo y selecciona la BD
function conectarse($h,$u,$p,$d){
  if($cnx_id= @mysqli_connect($h,$u,$p,$d)){
      $GlOBALS['msg']="Conexión Ok";
      return $cnx_id;
  }else{
      $GlOBALS['msg']="Error en la Conexión, verifique los parámetros en config.php ";
      return false;
  }
}

//Ejecuta la Sentencia SQL enviada como parámetro contra la BD
function ejecutarSql($con_id,$sql){
  if($res= @mysqli_query($con_id,$sql)){
      $GlOBALS['msg']="Ejecución de Consulta Ok";
      return $res;
  }else{
      $GlOBALS['msg']="Error en la ejecución de la consulta SQL: $sql ";
      return false;
  }
}

// Permite ver los resultados optenidos de la Consulta Ejecutada
function MostrarResulSql($results){
  while($reg = mysqli_fetch_array($results)){
      echo "<tr><td>{$reg['id']}</td>";
      echo "<td>{$reg['nombre']}</td>";
      echo "<td><form action='includes/acciones.php' method=get>
                  <input type=hidden name=cargo_id value={$reg['id']}>
                  <input type=submit name='accion_show' value='Ver' class='btn btn-info' />
                  <input type=submit name='accion_edit' value='Editar' class='btn btn-warning' />
                  <input type=submit name='accion_del' value='Eliminar' class='btn btn-danger' onClick=\"return confirm('Esta acción no puede ser devuelta, Esta seguro de querer realizarla ? ')\"/>
                </form>
            </td></tr>";
  }
}

?>