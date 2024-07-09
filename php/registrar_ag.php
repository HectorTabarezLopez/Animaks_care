<?php
include("conexion.php");

if(isset($_POST['registerAg'])){
    if(
        strlen($_POST['nombre_dueño']) >= 1 &&
        strlen($_POST['fecha']) >= 1 &&
        strlen($_POST['hora']) >= 1 &&
        strlen($_POST['servicio']) >= 1 
     ){
        $nombre_dueño = trim($_POST['nombre_dueño']);
        $fecha = trim($_POST['fecha']);
        $hora = trim($_POST['hora']);
        $servicio = trim($_POST['servicio']);
        $consulta = "INSERT INTO agendarCita(nombre_dueño, fecha, hora, servicio)
            VALUES ('$nombre_dueño',  '$fecha', '$hora', '$servicio')";
        $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                <h3 class="success">Tu registro se ha completado</h3>
                <?php
            } else {
            ?>
                <h3 class="error">Ocurrio un error</h3>
            <?php
            }
        } else {
            ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php
        }
}

?>