<?php
session_start();
$no_cuenta = $_SESSION['usermane']; //1234567890

if (!isset($no_cuenta)) {
    header("location: ./index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="styles.css"> 
    <link rel="shortcut icon" href="./logo/ico.jpeg" type="image/x-icon">
</head>
<header>
    <div>
    <h1>Bienvenido, tu número de usuario es: <?php echo htmlspecialchars($no_cuenta); ?></h1>
    </div>
    </header>
<body>
    <div class="principal">
        <a href='logica/salir.php' class="btn">Salir</a>

        <?php
        // Conexión a la base de datos
        require "./logica/conexion.php";
        mysqli_set_charset($conexion, 'utf8');

        // Generar el query
        $consulta_sql = "SELECT * FROM usuarios";
        $resultado = $conexion->query($consulta_sql);
        $count = mysqli_num_rows($resultado); 

        // Renderizar la tabla
        if ($count > 0) {
            echo "<table>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>No. de Identificación</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th>Correo Electrónico</th>
                        <th>Universo</th>
                        <th>Contraseña</th>
                        <th>Fecha de Registro</th>
                    </tr>";
            // Itera sobre los resultados y genera una fila para cada usuario.
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                        <td>" . htmlspecialchars($row['nombre_usuario']) . "</td>
                        <td>" . htmlspecialchars($row['apellidos_usuario']) . "</td>
                        <td>" . htmlspecialchars($row['no_identificacion']) . "</td>
                        <td>" . htmlspecialchars($row['direccion']) . "</td>
                        <td>" . htmlspecialchars($row['telefono']) . "</td>
                        <td>" . htmlspecialchars($row['correo']) . "</td>
                        <td>" . htmlspecialchars($row['universo']) . "</td>
                        <td>" . htmlspecialchars($row['password']) . "</td>
                        <td>" . htmlspecialchars($row['fecha_registro']) . "</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<h2 class='sin-registros'>Sin Ningún registro</h2>";
        }
        ?>

        <div class="actions">
            <h1><a href="EliminarUsuario.php" class="btn">Eliminar Usuario</a></h1>
            <h1><a href="Registro.php" class="btn">Registro</a></h1>
        </div>
    </div>
    <footer>
        <p>© 2024. Sistemas de seguridad Stark Industries</p>
    </footer>
</body>
</html>
