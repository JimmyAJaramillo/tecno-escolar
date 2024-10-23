<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$basedatos = "tecno-escolar";

$conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if (isset ($_POST["REQUEST_METHOD"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contrasena = $_POST["contrasena"];

    $insertarDatos = "INSERT INTO usuarios VALUES ('$nombre', '$apellido', '$contrasena')";

    if ($conexion->query($sql) === TRUE) {
        header("Location: ./login_register_db.php");
        exit();
    } else {
        echo "Error al registrar: " . $conexion->error;
    }
}

$conexion->close();
?>

