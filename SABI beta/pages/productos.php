
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

    <title>Productos</title>

</head>
<body>

    <!--Nav-->
    <?php include ('nav.php');?>
    <!--Fin Nav-->

    <!-- UnderTop-->
    <div class="under_top">
        <h1 class="titulo_blanco">Productos</h1>
    </div>
     <!-- UnderTop-->

     <!---Fondo Gris-->
    <div class="fondo">

    <!---Contenedor Productos-->
    <section class="productos_cont">

    <!---Carta Producto-->
    <div class="carta carta_producto">
            <h2 class="titulo_alt">Pack Basico</h2>
            <img src="" alt="" class="producto_img">
            <ul class="parrafo_cont parrafo">
                <li>+ Luces Direccionales</li>
                <li>+ Control de Luces</li>
                <li>+ Funciones básicas</li>
            </ul>
            
            
            <div class="precio_cont">
                <h2 class="subtitulo-bold">$200</h2>
            </div>
    </div>
    <!---FIn Carta Producto-->

        <!---Carta Producto-->
        <div class="carta carta_producto">
            <h2 class="titulo_alt">Pack Normal</h2>
            <img src="" alt="" class="producto_img">
            <ul class="parrafo_cont parrafo">
                <li>Luces Direccionales</li>
                <li>Control de Luces</li>
                <li>Funciones básicas</li>
                <br>
                <li>+ Rastrea tú bici</li>
                <li>+ Alarma antirobo</li>
            </ul>
            
            <div class="precio_cont">
                <h2 class="subtitulo-bold">$300</h2>
            </div>
    </div>
    <!---FIn Carta Producto-->

        <!---Carta Producto-->
        <div class="carta carta_producto">
            <h2 class="titulo_alt">Pack Profesional</h2>
            <img src="" alt="" class="producto_img">
            <ul class="parrafo_cont parrafo">
                <li>Luces Direccionales</li>
                <li>Control de Luces</li>
                <li>Funciones básicas</li>
                <li>Rastrea tú bici</li>
                <li>Alarma antirobo</li>
                <br>
                <li>+ Estadisticas a tiempo real</li>
                <li>+ Bateria Extra</li>
            </ul>
            
            
            <div class="precio_cont">
                <h2 class="subtitulo-bold">$400</h2>
            </div>
    </div>
    <!---FIn Carta Producto-->

    </section>
    <!---Fin Contenedor Productos-->





    
    </div>
    <!---Fin fondo gris-->

    <!--Footer-->
    <?php include ('footer.php');?>
    <!--Fin Footer-->

    <!--Archivo Js--><script src="../js/codigo.js"></script>
</body>
</html>

