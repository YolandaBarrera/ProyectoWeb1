<?php
session_start();
$no_cuenta = $_SESSION['usermane']; //1234567890, pass: 12345

if (!isset($no_cuenta)) {
    header("location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./logo/ico.jpeg" type="image/x-icon">
</head>
    <header>
        <div>
            <h1>Registro</h1>
        </div>
    </header>
<body>
<body class="registro-page">
    
    
    <div>
        <!-- El formulario enviará los datos al archivo, utilizando el método POST. -->
        <form action="./logica/enviarRegistro.php" method="post">
            <hr>
            <div>
                <label for="nombre_usuario">Nombre de usuario:</label>
                <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                <br><br>
                <label for="apellidos_usuario">Apellidos:</label>
                <input type="text" name="apellidos_usuario" required maxlength="100" placeholder="Ingresa tus Apellidos">
                <br><br>
                <label for="no_identificacion">No. de identificación:</label>
                <input type="text" name="no_identificacion" required maxlength="100" placeholder="10 dígitos">
                <br><br>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu dirección">
                <br><br>
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" required maxlength="8" placeholder="8 dígitos">
                <br><br>
                <label for="correo">Correo:</label>
                <input type="mail" name="correo" required maxlength="100" placeholder="Ingresa tu correo">
                <br><br>
                <label for="universo">Universo:</label>
                <input type="text" name="universo" required maxlength="10" placeholder="Máximo 10 dígitos">
                <br><br>
                <label for="password">Contraseña:</label>
                <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                <br><br>
            </div>
             <button type="submit" name="submit"  >Enviar registro</button>
        </form>
    </div>

</body>
</html>

<a href='./Registro.php'>Nuevo registro</a>
<a href='./Principal.php'>Ver registros</a>
