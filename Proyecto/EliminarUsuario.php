<?php
session_start();
$no_cuenta = $_SESSION['usermane']; // Obtiene la variable de sesión (numero de identificacion)

if (!isset($no_cuenta)) { // Verifica si no hay sesión activa
    header("location: ./index.php"); // Si no esta activa, redirige
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- Asegura que la página se vea bien en dispositivos móviles. -->
    <title>Eliminar</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./logo/ico.jpeg" type="image/x-icon">
</head>

<body class="eliminar-usuario">
    <header>
    <div class="header-content">
        <img src="./logo/Stark.jpg" alt="Logo" class="logo">
    </div>
    </header>
    <div class="index-page">
        <div class="row">
            <div class="col">
                <h1>Elimina el Usuario</h1>
                <!-- Formulario para eliminar un usuario, usa método POST -->
                <form method="POST" action="./logica/deleteUsuario.php" style="text-align: center;">
                    <input type="text" name="no_identificacion" placeholder="Número de Identificación" />
                    <br />
                    <button type="submit">Eliminar usuario</button>
                </form>
                <h1><a href="Principal.php">Listas</a></h1>
            </div>
        </div>
    </div>
    <footer>
        <p>© 2024. Sistemas de seguridad Stark Industries</p>
    </footer>
</body>

</html>
