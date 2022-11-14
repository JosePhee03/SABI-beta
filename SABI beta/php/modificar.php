<?php
include('config.php');

$id = $_POST['_id'];
$email = $_POST['_email'];
$pass = $_POST['_pass'];

$consulta = ("UPDATE usuarios SET email = '$email', password = '$pass' WHERE idusuario='$id'");
$conexion->query($consulta);

echo 
        '<script>
            alert("Usuario editado con éxito");
            window.location = "../pages/admin.php";
		</script>';
        exit();
