<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./logo/ico.jpeg" type="image/x-icon">
</head>
<body class="index-page">
    <header>
        <h1>Bienvenido</h1>
        <div class="header-content">
            <img src="./logo/2.jpg" alt="Logo" class="logo">
        </div>
    </header>
    <div class="row">
        <div class="col s12 m5">
            <div>
                <h1>Login</h1>
                <form method="POST" action="logica/loguear.php">
                    <input type="text" name="no_identificacion" placeholder="Número de Identificación" />
                    <br />
                    <input type="password" name="clave" placeholder="Contraseña" />
                    <br />
                    <button type="submit">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
