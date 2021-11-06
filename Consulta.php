<?php
include ('Conexion.php');
$conexion = mysqli_connect($server, $usuario, $contraseña, $bd);
?>

<!DOCTYPE html>
<HTML>
    <head>
        <title></title>
    </head>

    <body>  

    <br>

    <table align=center border="3">
        <tr>
            <td>Folio</td>
            <td>Cantidad</td>
            <td>Producto</td>
            <td>Total</td>
            <td>Recipiente</td>
        </tr>
        <?php 
        $sql= "SELECT * from venta";
        $resultado=mysqli_query($conexion,$sql);
        while($mostrar=mysqli_fetch_array($resultado)){
        ?>

        <tr>
            <td><?php echo $mostrar['Folio'] ?></td>
            <td><?php echo $mostrar['Cantidad'] ?></td>
            <td><?php echo $mostrar['Producto'] ?></td>
            <td><?php echo $mostrar['Total'] ?></td>
            <td><?php echo $mostrar['Recipiente'] ?></td>
            
        </tr>

        <?php 
        }
        ?>
    </table>
<br>
<br>
    <div align=center>
    <a href="index.html">Volver al Inicio</a>
    <a href="RegistroIndex.php">Registrar algo nuevo</a>
    <a href="EliminarIndex.php">Eliminar datos</a>
    <a href="UpdateIndex.php">Actualizar datos</a>
    </div>

    </body>
</HTML>