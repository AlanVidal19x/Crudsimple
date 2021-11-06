<?php

Include('Conexion.php');

$Folio=$_POST['txtfolio'];

mysqli_query($conexion, "DELETE from venta where Folio='$Folio'")
or die("Error al eliminar :(");
mysqli_close($conexion);
Echo "Datos eliminados :)";
?>

<html>
    <head>
        <title></title>
    </head>

    <body>  
    <div align=center>
    <a href="index.html">Volver al Inicio</a>
    <a href="RegistroIndex.php">Registrar algo nuevo</a>
    <a href="EliminarIndex.php">Eliminar datos</a>
    <a href="UpdateIndex.php">Actualizar datos</a>
    </div>
    </body>
</html>