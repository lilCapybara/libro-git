<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- http://localhost/Web%202/2-5/2-5.php es el link de la pagina central -->

<?php
    require_once 'funciones.php';

    define('BASE_URL', 'http://localhost/Web%202/2-5/'); /**defino la url base */
?>

    <a href="<?= BASE_URL ?>5">Tabla de 5</a>   <!-- http://localhost/Web%202/2-5/5 es el link de esta pagina -->
    <a href="<?= BASE_URL ?>10">Tabla de 10</a> <!-- http://localhost/Web%202/2-5/10 es el link de esta pagina -->
    <a href="<?= BASE_URL ?>20">Tabla de 20</a> <!-- http://localhost/Web%202/2-5/20 es el link de esta pagina -->


    <form name="formulario" method="get">
        <label>Limite de filas/columnas</label><input type="text" name="limite">
        <button type="submit">Enviar</button>
    </form>

    <table>

        <?php

            if (isset($_GET["limite"])){       /**seria lo mismo usar !empty */
                $limite=$_GET["limite"]; 
                armarTabla($limite);
            }
            
        ?>

    </table>

</body>
</html>