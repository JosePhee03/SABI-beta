<?php
include('config.php');

$id = $_GET['id'];

$consulta = ("DELETE FROM usuarios WHERE idusuario='$id'");
$conexion->query($consulta);


echo 
        '<script>
            alert("Usuario ha sido eliminado");
            window.location = "../pages/admin.php";
		</script>';
        exit();
