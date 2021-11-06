<html>
    <head>
        <title></title>
    </head>

    <body>
        <Form align=Center action="Update.php" method="POST">
            Folio: <input type="text" name="txtfolio"><br><br>
            Cantidad: <input type="text" name="txtcant"><br><br>
            Producto: <input type="Text" name="txtprod"><br><br>
            Total: <input type="text" name="txtTotal"><br><br>
            Recipiente: <input type="Text" name="txtrecipiente"><br><br>
            <input type="submit" value="Actualizar" name="btnupdate">
        </Form>
        <?php
    Include('Consulta.php');
    ?>

    </body>
</html>