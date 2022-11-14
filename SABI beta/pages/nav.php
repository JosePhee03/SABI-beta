<nav>
        <!---Contenedor logo-->
        <div class="logo">
            <img src="../img/logo_sabi.png" alt="logo_sabi" class="logo_img">
            <a href="inicio.php" class="logo_text titulo">SABI</a>
        </div>
        <!---Fin Contenedor logo-->

        <!---Contenedor menu-->
        <div class="menu">
            <a href="funciones.php"class="menu_cont subtitulo" id="menu-funciones">Funciones</a>
            <a href="preguntas.php"class="menu_cont subtitulo" id="menu-preguntas">Preguntas</a>
            <a href="productos.php"class="menu_cont subtitulo" id="menu-productos">Productos</a>
            <a href="#"class="menu_cont subtitulo" id="menu-contacto">Contacto</a>
        </div>
        <!---Fin Contenedor menu-->

        <!-- Boton SABI -->
        <div class="boton_sabi">
            <a href="misabi.php" class="subtitulo boton_principal">MI SABI</a>
        </div>
        
         <!-- Fin Boton SABI -->

        <!---Contenedor usuario-->
        <div class="user">

            <!---Nombre y logo usuario-->
            <ul class="user_menu">

                <li>
                    <div class="user_cont">
                        <h6 class="subtitulo-bold user_text">
                            <?php
                                //email del Usuario
                                session_start();

                                if(empty($_SESSION['usuario'])){
                                    echo "Usuario";
                                }else{
                                    echo $_SESSION['usuario'];
                                }
                                
                            ?>
                        </h6>
                        <img src="../img/icon_user.png" alt="user_img" class="user_img">
                    </div>
                <!---Fin Nombre y logo usuario-->

                <!--Menu desplegable Usuario-->
                    <ul class="desplegable">
                        <li class="">
                            <a href="#"class="parrafo">Configuración</a>
                        </li>
                        <li class="desplegable_link-end">
                            <a href="../php/cerrar.php"class=" parrafo">Salir</a>
                        </li>

                    </ul>
                    <!--Fin Menu desplegable Usuario-->
                </li>
            </ul>
        </div>
        <!---Fin Contenedor usuario-->

    </nav>
