
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

    <title>Mi SABI</title>

</head>
<body>

    <!--Nav-->
    <?php include ('nav.php');?>
    <!--Fin Nav-->

    <!--Fondo Gris-->
    <div class="misabi_cont">

        <!--Barra Lateral-->
        <div class="barra_lateral">
            <!--Contenido Barra Usuario-->
            <div class="bar_usuario">
                <img src="../img/icon_usuario-grande.png" class="icon_usuario-grande" alt="" srcset="">
                <h5 class="subtitulo-bold">
                <?php
                                //email del Usuario
                                session_start();

                                if(empty($_SESSION['usuario'])){
                                    echo "Usuario";
                                }else{
                                    echo $_SESSION['usuario'];
                                }
                                
                            ?>
                </h5>
                <a href="../php/cerrar.php" class="parrafo">Cerrar Sesión</a>
            </div>
            <!--FIn Contenido Barra Usuario-->

            <!--Contenido Barra Menu-->
            <div class="bar_menu parrafo">
                <ul>
                    <li>Mi Pack</li>
                    <li>Mejores Tiempos</li>
                    <li>Estadisticas</li>
                    <li>Recorridos</li>
                    <li>Más Opciones</li>
                </ul>
            </div>
            <!--Fin Contenido Barra Menu-->

        </div>
        <!--Fin Barra Lateral-->
        


        <!--Contenido MI SABI-->
        <section class="contenido_misabi">

            <!-- UnderTop-->
            <div class="under_top-misabi">
                <h6 class="titulo_blanco">Mi SABI</h6>

                <!--Cartas MI SABI-->
                <section class="estadisticas_cont">
                    <!--Carta-->
                    <div class="carta carta_misabi">
                        <h5 class="subtitulo-bold color_violeta">Tiempo en bici</h5>
                        <h6 class="parrafo">7h <b class="color_violeta">este mes</b></h6>
                    </div>
                    <!--Carta-->
                    <div class="carta carta_misabi">
                        <h5 class="subtitulo-bold color_verde">Tiempo en bici</h5>
                        <h6 class="parrafo">2h <b class="color_verde">este día</b></h6>
                    </div>
                    <!--Carta-->
                    <div class="carta carta_misabi">
                        <h5 class="subtitulo-bold color_morado">Mejor Recorrido</h5>
                        <h6 class="parrafo">10 km</h6>
                    </div>
                    <!--Carta-->
                    <div class="carta carta_misabi">
                        <h5 class="subtitulo-bold color_rojo">Calorias Bajadas</h5>
                        <h6 class="parrafo">864g <b class="color_rojo">por día</b></h6>
                    </div>
                   
                </section>
                <!--Cartas MI SABI-->

            </div>
            <!-- UnderTop-->

            <!--Subcontenedores misabi-->
            <section class="subcontenido_misabi-1">
                <!--Carta Graficos-->
                <div class="carta carta_misabi">
                    <h2 class="titulo_alt">Grafico de recorrido</h2>
                    <img src="../img/grafico_misabi.png" class="grafico_misabi" alt="">
                </div>

                <div class="carta carta_misabi">
                    <h2 class="titulo_alt">Ubicación SABI</h2>
                    <img src="../img/mapa_misabi.png" class="grafico_misabi" alt="" srcset="">
                </div>
                <!-- Carta Graficos-->


            </section>
            
            <section class="subcontenido_misabi-2">
                <div class="carta carta_misabi carta_misabi-funciones">
                    <h2 class="titulo_alt">Funciones</h2>
                    <img src="../img/funciones_img.png" alt="" class="funciones_img">
                </div>
            </section>
            <!--Fin Subcontenedores misabi-->

        </section>


        
        <!--Fin Contenido MI SABI-->

        


    </div>
    <!--Fin Fondo Gris-->

    


    <!--Footer-->
    <?php include ('footer.php');?>
    <!--Fin Footer-->

    <!--Archivo Js--><script src="../js/codigo.js"></script>
</body>
</html>

