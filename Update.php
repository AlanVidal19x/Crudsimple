<?php

include("Conexion.php");
include("Consulta.php");

                $folio= $_POST['txtfolio'];
                $Cantidad= $_POST['txtcant'];
                $Producto= $_POST['txtprod'];
                $total= $_POST['txtTotal'];
                $recipiente= $_POST['txtrecipiente'];

                mysqli_query($conexion, "UPDATE venta set Cantidad='$Cantidad', Producto='$Producto', Total='$total', Recipiente='$recipiente' where Folio='$folio'")
                or die ("Error al actualizar datos :(");

                mysqli_close($conexion);
                echo"Listo, datos actualizados! :)"

                
?>