<?php
// verifica las acciones a ejecutar y realiza lo requerido


//Se incluye el archivo de configuración de la conexion y las funciones de Operaciones CRUD.
  include('config.php');
  include_once('fn_crud.php');

// realizo la conexion
   if(!$con_id = conectarse($host,$user,$pass,$db)){
        die($msg);
   }else{
   
      // Se valida la operación a ejecutar  
      if(isset($_GET['accion_show'])){
          //header("Location:ver.php");
          $id = $_GET['cargo_id'];
          $sql = "SELECT * FROM cargos WHERE id=$id";
          $rs= ejecutarSql($con_id,$sql);
          include ("../ver.php");
      }
      //Acciones de edicion
      elseif (isset($_GET['accion_edit'])){
          $id = $_GET['cargo_id'];
          header("Location:editar.php?id=$id");
      }
      elseif (isset($_GET['change'])){
        $con_id=conectarse($host,$user,$pass,$db);
        $id = $_GET['id'];        
        $sql="UPDATE cargos SET nombre='{$_GET['changeCargo']}' WHERE id=$id";
        $me2 = ejecutarSql($con_id,$sql);
        $men="Cargo Actualizado";
        header("Location:../cargos.php");
      }

      //Acciones de Eliminar
      elseif (isset($_GET['accion_del'])){
          $id = $_GET['cargo_id'];
          $sql = "DELETE FROM cargos WHERE id=$id";
          $rs= ejecutarSql($con_id,$sql);
          header("Location:../cargos.php");
      }

      //Acciones de Nuevo
      elseif (isset($_GET['accion_new'])){
          header("Location:nuevo.php");
      }
      elseif (isset($_GET['new'])){
        $con_id=conectarse($host,$user,$pass,$db);
        $sql="INSERT INTO cargos (id, nombre) VALUES (null,'{$_GET['newCargo']}')";
        $me2 = ejecutarSql($con_id,$sql);
        header("Location:../cargos.php");
      }

      else{
          $sql = "SELECT * FROM cargos";
          $rs= ejecutarSql($con_id,$sql);
          MostrarResulSql($rs);
      }
   }


?>