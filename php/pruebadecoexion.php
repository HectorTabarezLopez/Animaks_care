<?php
    include("conexion.php");
    if(isset($_POST['register'])){
        if(
            strlen($_POST['nombre']) >= 1 &&
            strlen($_POST['name_p']) >= 1 &&
            strlen($_POST['name_m']) >= 1 &&
            strlen($_POST['email']) >= 1 &&
            strlen($_POST['phone']) >= 1 &&
            strlen($_POST['password']) >= 1
           ) {
                $nombre = trim($_POST['nombre']);
                $paterno = trim($_POST['name_p']);
                $materno = trim($_POST['name_m']);
                $phone = trim($_POST['phone']);
                $email = trim($_POST['email']);
                $fecha = date("y-m-d");
                $consulta = "INSERT INTO registrarClientes(nombre, name_p, name_m, phone, email,  fecha)
                    VALUES('$nombre', '$paterno', '$materno', '$phone',  '$email',  '$fecha')";

                $verificar_correo = mysqli_query($conex, "SELECT * FROM paciente WHERE email='$email'");
                if(mysqli_num_rows($verificar_correo) > 0){
                    echo "<script>
                        alert('Este correo ya esta registrado, intente con otro diferente');
                        window.location.href = '../InterfazPrincipal/5iniciarsesion.php';
                    </script>
                    ";
                    exit();
                }                

                $resultado = mysqli_query($conex, $consulta);
                if($resultado){
                    echo "<script>
                        alert('Tu Registro se ha Completado');
                        window.location.href = 'n2pacientes.php';
                    </script>";
                }else{
                    echo "<script>alert('Ocurrio un Error');</script>";
                }
            }else{
                echo "<script>alert('Llenar todos los Campos');</script>";
            }
    }
?>