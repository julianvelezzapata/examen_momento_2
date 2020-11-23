<?php
include("Basedatos.php");

if (isset($_POST["btnenviar"]) )
{
    //  1 recibir lod datos
    $nombre_producto = $_POST['nombre_producto'];
    $marca = $_POST['marca'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $foto=$_POST["foto"];
    

   

    // 2 crear una copia de la clase bd o es decir crear un objeto de la clase
    $transaccion = new Basedatos();

    // 3 crear una consulta sql para agregar datos
    $consultaSQL="INSERT INTO productos(NombreProducto, MarcaProducto, PrecioProducto, Descripcion, foto) VALUES (' $nombre_producto','$marca','$precio','$descripcion', '$foto')";

    //4u tilizar el metodo agregar datos
    $transaccion->agregarDatos($consultaSQL);


}





