<?php
function abrirConexion() {
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basedatos = "tecno-escolar";

    $conexion = new mysqli($servidor, $usuario, $contrasena, $basedatos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    return $conexion;
}

function cerrarConexion($conexion) {
    $conexion->close();
}
?>
