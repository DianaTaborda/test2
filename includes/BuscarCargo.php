<?php
	include ("config.php");
	include ("fn_crud.php");
	$id = $_GET['id'];
	$con_id = conectarse($host,$user,$pass,$db);
	$sql="SELECT * FROM cargos WHERE id=$id";
	$rs= ejecutarSql($con_id,$sql);
	$Row=mysqli_fetch_array($rs);		
?>