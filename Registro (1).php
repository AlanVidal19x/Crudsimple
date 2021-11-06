<html>
    <head>
        <tittle></tittle>
        <body>
            <?php
                 $server="localhost";
                 $usuario="id17766937_venta";
                 $contraseña="NelsonCejas145{";
                 $bd="id17766937_cafeteria";

 $conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
     or die ("Error");
                $folio= $_POST['txtfolio'];
                $Cantidad= $_POST['txtcant'];
                $Producto= $_POST['txtprod'];
                $total= $_POST['txtTotal'];
                $recipiente= $_POST['txtrecipiente'];

                $insertar="INSERT into venta values ('$folio','$Cantidad', '$Producto', '$total', '$recipiente')";
                $resultado= mysqli_query($conexion, $insertar)
                or die ("Error al insertar");
                mysqli_close($conexion);
                echo"¡Datos insertados!"
               

            ?>

<div align=center>
    <a href="index.html">Volver al Inicio</a>
    <a href="RegistroIndex.php">Registrar algo nuevo</a>
    <a href="EliminarIndex.php">Eliminar datos</a>
    <a href="UpdateIndex.php">Actualizar datos</a>
    </div>
        </body>
    </head>
</html>