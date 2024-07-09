<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="BootStrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="php.css">
   
</head>
<body>

<form method="post">
    <h2>Hola</h2>
    <p>Registro del cliente</p>

    <div class="input-wrapper mb-3">
        <input type="text" name="name" placeholder="Nombre" class="form-control">
        <img class="input-icon" src="imagenes/LogoPru.png" alt="">
    </div>

    <div class="input-wrapper mb-3">
        <input type="text" name="name_p" placeholder="Apellido Paterno" class="form-control">
        <img class="input-icon" src="imagenes/LogoPru.png" alt="">
    </div>

    <div class="input-wrapper mb-3">
        <input type="text" name="name_m" placeholder="Apellido Materno" class="form-control">
        <img class="input-icon" src="imagenes/LogoPru.png" alt="">
    </div>

    <div class="input-wrapper mb-3">
        <input type="tel" name="phone" placeholder="Telefono" class="form-control">
        <img class="input-icon" src="imagenes/LogoPru.png" alt="">
    </div>

    <div class="input-wrapper mb-3">
        <input type="email" name="email" placeholder="Email" class="form-control">
        <img class="input-icon" src="imagenes/LogoPru.png" alt="">
    </div>

    <input class="btn btn-primary" type="submit" name="register" value="Enviar">
</form>

<div><a href="../lis_clientes.html">Regresar</a></div>

<script src="BootStrap/js/bootstrap.min.js"></script>

<?php
    include("registrar.php");
?>
</body>
</html>
