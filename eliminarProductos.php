<?php

//1 incluir el archivo base de datos
include("Basedatos.php");

//2 recibir los productos
$id=$_GET["id"];

//3 crear un objeto (sacar copia de laclase base de datos)
$transaccion = new Basedatos();

//4 crear una consulta sql para eliminar datos
$consultaSQL="DELETE FROM productos WHERE CodigoProducto='$id'";

// 5 ejecute el metodo elminar usuario
$transaccion->eliminarDatos($consultaSQL);

?>