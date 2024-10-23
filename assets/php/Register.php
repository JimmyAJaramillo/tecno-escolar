<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = abrirConexion();

    if ($conexion) {
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $contrasena = $_POST["password"];

        $consulta = $conexion->prepare("INSERT INTO usuarios (nombre, apellido, contrasena) VALUES (?, ?, ?)");
        $consulta->bind_param("sss", $nombre, $apellido, $contrasena);

        if ($consulta->execute()) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error al registrar: " . $consulta->error;
        }

        cerrarConexion($conexion);
    } else {
        echo "Error al conectar a la base de datos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="/assets/css/stylesregistro.css">
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
    <title>Registro</title>
</head>
<body>
<div>
<button class="back-button" onclick="goBack()">←</button>
        <div class="container">
            <h1 style="color: #f78907;">Registro</h1>
        </div>
<center>
<div class="containers">
<form id="registerForm" method="post" action="register.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit" value="Registrar" class="button">Registrate</button>
        </form>
</div>
</center>
    </div>

</body>
</html>
