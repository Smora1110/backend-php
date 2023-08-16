<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Digite</h1>
    <form action="03_metodoget.php" method="get">

    Nombre:
    <input type="text" name="nombre"/>
    <br>
    Fecha:
    <input type="date" name="fecha"/>
    <br>
    <input type="submit" value="enviar"/>


    </form>

    <h2>Info enviada es :</h2>
    <?php

    print_r($_GET);

    ?>
</body>
</html>