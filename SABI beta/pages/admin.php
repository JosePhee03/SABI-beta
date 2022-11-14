<?php
include('../php/config.php');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Icono--><link rel="shortcut icon" href="../img/logo_sabi.png" type="image/x-icon">

    <!---Fuentes-->
        <!--K2D Font--><link href="https://fonts.googleapis.com/css2?family=K2D:wght@200;400;600;800&display=swap" rel="stylesheet">
        <!--Blinker Font--><link href="https://fonts.googleapis.com/css2?family=Blinker:wght@300&display=swap" rel="stylesheet">
        <!--Nunito Font--><link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet">
        <!---Fin Fuentes-->

    <!---Estilos CSS-->
    <link rel="stylesheet" href="../css/estilos.css">

    <!---Fin Estilos CSS-->

    <title>Admin</title>

</head>
<body>

    <!--Nav-->
    <?php include ('nav.php');?>
    <!--Fin Nav-->

    <!---Fondo Gris-->
    <div class="fondo admin_cont">  
            <div class="tabla_usuarios carta">
                <h2 class="titulo_alt">Tabla Usuarios</h2>
                <table class="tabla parrafo">
                    <tr class="fila_1">
                        <th>ID</th>
                        <th>Email</th>
                        <th>Contraseña</th>
                        <th></th>
                    </tr>
                    <?php
                    $consulta = "SELECT * FROM usuarios";
        
                    if ($resultado = $conexion->query($consulta)) {
        
                        while ($row = $resultado->fetch_assoc()) {
                            $idusuario = $row["idusuario"];
                            $email = $row["email"];
                            $pass = $row["password"];
                    ?>
                            <tr class="fila_2">
                                <th><?php echo "$idusuario"; ?></th>
                                <th><?php echo "$email"; ?></th>
                                <th><?php echo "$pass"; ?></th>
                                <th class="admin_icon_col">
                                    <a href="../pages/editar.php?id=<?php echo "$idusuario"; ?>"><img src="../img/icon_lapiz.png" alt="icon_lapiz" class="admin_icon"></a>
                                    <a href="../php/eliminar.php?id=<?php echo "$idusuario"; ?>"><img src="../img/icon_basura.png" alt="icon_basura" class="admin_icon"></a>
                                </th>
                            </tr>
                    <?php
                        }
                        $resultado->free();
                    }
                    ?>
        
        
                </table>
            </div>

                    <!---Contenedor del registro-->
        <div class="registro_cont carta">
            <!---Elementos del registro-->
            <div class="registro_encabezado">
                <div class="separador_3">
                </div>
                <div class="encabezado_text">
                    <h2 class="titulo_alt">Agregar Usuario</h2>
                </div>
                <div class="encabezado_logo">
                    <img src="../img/logo_sabi_alt.png" alt="logo_sabi_alt" class="logo_sabi_alt">
                </div>
                
                
                
            </div>

            <!---Formulario del registro-->
            <form action="../php/insertar.php" method="post" class="formulario">
                <p class="subtitulo">Email</p>
                <input type="email" name="_email" class="input parrafo" required>

                <p class="subtitulo">Contraseña</p>
                <input type="text" name="_pass" class="input parrafo" required>

                <p class="subtitulo">Confirmar contraseña</p>
                <input type="text" name="_pass2" class="input parrafo" required>

                <div class="centrar">
                    <button type="submit" class="subtitulo boton_principal">Agregar</button>
                </div>


            </form>

        </div>
        <!---Contenedor del registro-->        


    </div>
    <!---Fin fondo gris-->

    <!--Footer-->
    <?php include ('footer.php');?>
    <!--Fin Footer-->

    <!--Archivo Js--><script src="../js/codigo.js"></script>
</body>
</html>

