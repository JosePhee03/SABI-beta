<?php
include('../php/config.php');

$id = $_GET['id'];

$consulta = ("SELECT * FROM usuarios WHERE idusuario='$id'");
$resultado = mysqli_query($conexion,$consulta); //resultado de la consulta
$row = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="en">
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

    <title>Editar Usuario</title>
</head>
<body>
    <!---Fondo Gris-->
    <div class="fondo">

        <!---Contenedor del sesion-->
        <div class="registro_cont carta">
            <!---Elementos del sesion-->
            <div class="registro_encabezado">
                <div class="separador_3">
                </div>
                <div class="encabezado_text">
                    <h2 class="titulo_alt">Editar Usuario</h2>
                </div>
                <div class="encabezado_logo">
                    <img src="../img/logo_sabi_alt.png" alt="logo_sabi_alt" class="logo_sabi_alt">
                </div>
                
                
                
            </div>
            <h3 class="subtitulo-bold">Usuario  <?php echo $id?></h3>

            <!---Formulario del Sesion-->
            <form action="../php/modificar.php" method="post" class="formulario">

                <p class="subtitulo">ID</p>
                <input type="text" name="_id" class="input parrafo" readonly="readonly" value="<?php echo $row['idusuario'];?>">

                <p class="subtitulo">Editar Email</p>
                <input type="email" name="_email" class="input parrafo" required value="<?php echo $row['email'];?>">

                <p class="subtitulo">Editar Contraseña</p>
                <input type="text" name="_pass" class="input parrafo" required value="<?php echo $row['password'];?>">

                <div class="centrar">
                    <button type="submit" class="subtitulo boton_principal">Editar</button>
                </div>
                


            </form>
            <!---Formulario del Sesion-->
            <div class="registro_pie">
                <p class="parrafo">Volver al admin. <a href="../pages/admin.php" class="parrafo-link">Volver</a>.</p>
            </div>
            <!---Fin Elementos del Sesion-->


        </div>
        <!---Contenedor del sesion-->

    </div>
    <!---Fin fondo gris-->
</body>
</html>