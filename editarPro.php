<?php
try
{include("Basedatos.php");

    //1 recibir los datos a editar
    if (isset($_POST["botonEditar"]))
    {

        $nombre_producto = $_POST['nombreEditar'];
        $precio = $_POST['precioEditar'];
        $marca = $_POST["marcaEditar"];
        $descripcion = $_POST['descripcionEditar'];
        
        //recibir el id de el usuario a editar

        $id=$_GET["id"];


        // crear un objeto de la clase base de datos

        $transaccion = new Basedatos();

        //crear la consulta para editar
        $consultaSQL=" UPDATE productos SET NombreProducto='$nombre_producto',PrecioProducto='$precio',MarcaProducto='$marca',Descripcion='$descripcion',WHERE CodigoProducto='$id'";

        //llamar al metodo editar datos
        $transaccion->editarDatos($consultaSQL);

    }
}catch(PDOException $error)
    {
      echo($error ->getMessage());
    }

?>