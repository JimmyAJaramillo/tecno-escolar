<?php
include 'conexion_be.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conexion = abrirConexion();

    if ($conexion) {
        $nombre = $_POST["nombre"];
        $contrasena = $_POST["password"];

        $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE nombre=? AND contrasena=?");
        $consulta->bind_param("ss", $nombre, $contrasena);

        $consulta->execute();
        $resultado = $consulta->get_result();

        if ($resultado->num_rows > 0) {
            header("Location: /assets/empecemos.php");
            exit();
        } else {
            $mensaje_error = "Usuario o contraseña incorrectos.";
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
    <link rel="stylesheet" type="text/css" href="/assets/css/styleslogin.css">
    <link href='https://fonts.googleapis.com/css?family=Chewy' rel='stylesheet'>
    <link rel="stylesheet" href="./stylesinicio.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <div>
        <div class="container">
            <center>
            <h1 style="color: #f78907;">Iniciar</h1>
            <h1 style="color: #1947E4;">sesión</h1>
            </center>
        </div>

        <?php
        if (isset($mensaje_error)) {
            echo "<p style='color:red;'>$mensaje_error</p>";
        }
        ?>

        <form id="loginForm" method="post" action="">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Entrar">
        </form>
        
        <div class="container">
            <button onclick="irARegistro()">Registro</button>
        </div>
        
        <script>
            function irARegistro() {
                window.location.href = "./Register.php";
            }
        </script>
    </div>

    <form action="/assets/empecemos.php" method="POST"></form>



</body>
</html>
