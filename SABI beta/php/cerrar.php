<?php


session_start();
session_destroy();

echo 
        '<script>
            alert("Sesión cerrada con éxito");
            window.location = "../pages/sesion.php";
		</script>';
        exit();


?>