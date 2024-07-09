<?php
    $conex = mysqli_connect("localhost","root","","registro");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="tablas.css">
    <link rel="website icon" type="png" href="../Imagenes/INTERMEDICALLOGO.png">
    <script src="https://kit.fontawesome.com/1a12489769.js" crossorigin="anonymous"></script>
</head>
<body>
   
        <div class="header-content">
            <h1>Clientes Registrados</h1>
            <div class="line"></div>
        </div>

    <ul><li><a href="php/agregar_cliente.php"><i class="fa-solid fa-user-plus"></i>Agregar cliente</a></li></ul><br>

    <div>
        <input type="text" id="buscar" placeholder="Buscar...">
    </div><br>

    <div id="tabla" class="table-responsive">
    <table>
        <tr style="border:3px #28537e solid">
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Fecha</th>
            <th colspan="2">Operaciones</th>
        </tr>
        <?php
            $sql="SELECT * FROM paciente";
            $result=mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr style="border:3px #28537e solid">
            <td><?php echo $mostrar['id'] ?></td>
            <td><?php echo $mostrar['nombre'] ?></td>
            <td><?php echo $mostrar['name_p'] ?></td>
            <td><?php echo $mostrar['name_m'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['email'] ?></td>
            <td><?php echo $mostrar['fecha'] ?></td>
            <td><a href="editarpaciente.php?id=<?php echo $mostrar['id_paciente'] ?>"><i class="fa-solid fa-pen-to-square"></i> Editar</a></td>
            <td><a href="eliminarpaciente.php?id=<?php echo $mostrar['id_paciente'] ?>"><i class="fa-solid fa-trash-can"></i> Eliminar</a></td>
        </tr>
        <?php 
            }
        ?>
    </table>
    </div>
   
    <script src="buscar.js"></script>
    <script src="BootStrap/js/bootstrap.min.js"></script>
</body>
</html>