<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    <form method="post">

    <h2>Bienvenido Administrador</h2>
    <p>Registe una cita</p>

    <div class="input-wrapper">
        <input type="text" name="nombre_dueño" placeholder="Nombre del dueño">
        <img class="input-icon" src="images/LogoPru.png" alt="">

    </div>


    <div class="input-wrapper">
        <input type="text" name="fecha" placeholder="Fecha">
        <img class="input-icon" src="images/LogoPru.png" alt="">

    </div>

    <div class="input-wrapper">
        <input type="text" name="hora" placeholder="Horario">
        <img class="input-icon" src="images/LogoPru.png" alt="">

    </div>

    <div class="input-wrapper">
        <input type="text" name="servicio" placeholder="Servicio">
        <img class="input-icon" src="images/LogoPru.png" alt="">

    </div>

    <input class="btn" type="submit" name="registerAg" value="Enviar">

    </form>

    <div><a href="../cita.html">Regresar</a></div>

    <?php
        include("registrar_ag.php");

    ?>


</body>
</html>