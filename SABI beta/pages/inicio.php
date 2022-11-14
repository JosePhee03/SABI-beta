
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


    <title>Inicio</title>

</head>
<body>

    <!--Nav-->
    <?php include ('nav.php');?>
    <!--Fin Nav-->

    <section class="inicio_cont-1">

        <h1 class="titulo_alt-grande inicio_text_cont">Sistema Automatico de Bicicleta Inteligente</h1>
        <img src="../img/sabi_ecenario-1.png" class="ecenario" alt="">

    </section>
    <section class="inicio_cont-2">
    
        <img src="../img/sabi_ecenario-2.png" class="ecenario" alt="">
        <div class="inicio_text_cont">
            <h1 class="titulo_alt-grande">¡Adquiere tu SABI ya!</h1>
            <a class="boton_inicio titulo_alt" href="productos.php">COMPRAR</a>
        </div>
        
    </section>
    <section class="inicio_cont-3">
        <!-- Carta Imagen-->
        <div class="carta_img inicio_img-1">
            <a class="caja_degradado" href="#s">
                <h4 class="titulo_blanco">SABI App</h4>
            </a>
        </div>
        <!-- Carta Imagen-->

        <!-- Carta Imagen-->
        <div class="carta_img inicio_img-2">
            <a class="caja_degradado" href="funciones.php">
                <h4 class="titulo_blanco">Funciones</h4>
            </a>
        </div>
        <!-- Carta Imagen-->

        <!-- Carta Imagen-->
        <div class="carta_img inicio_img-3">
            <a class="caja_degradado" href="#">
                <h4 class="titulo_blanco">Más Información</h4>
            </a>
        </div>
        <!-- Carta Imagen-->
    </section>


    <!--Footer-->
    <?php include ('footer.php');?>
    <!--Fin Footer-->

  <!--Archivo Js--><script src="../js/codigo.js"></script>
</body>
</html>

