<?php
include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['name_p']) >= 1 &&
        strlen($_POST['name_m']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 
     ){
        $name = trim($_POST['name']);
        $name_p = trim($_POST['name_p']);
        $name_m = trim($_POST['name_m']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $fecha = date ("d/m/y");
        $consulta = "INSERT INTO registrarClientes(nombre, name_p, name_m, phone, email, fecha)
            VALUES ('$name', '$name_p', '$name_m', '$phone', '$email', '$fecha')";
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







