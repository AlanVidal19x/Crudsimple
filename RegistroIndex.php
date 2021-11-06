<html>
    <head>
        <tittle>

        </tittle>
    </head>
    <body>

    <h1 align=center>Cafeteria Cream</h1>

    <form align="center" action="Registro.php" method="POST"><br><br>
        Folio: <input type="text" name="txtfolio"><br><br>
        Cantidad: <input type="text" name="txtcant"><br><br>
        Producto: <input type="Text" name="txtprod"><br><br>
        Total: <input type="text" name="txtTotal"><br><br>
        Recipiente: <input type="Text" name="txtrecipiente"><br><br>

        <input type="submit" value="Registrar" name="btnregistro">
    </form>
    
    <?php
     Include('Consulta.php');
    ?>
    </body>
</html>